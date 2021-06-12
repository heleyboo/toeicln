<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DocumentRepository;
use App\Http\Requests\DocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller {
    protected $documentRepository;
    protected $manager;

    public function __construct(DocumentRepository $documentRepository)
    {
        $this->documentRepository = $documentRepository;
        $this->manager = app('uploader');
    }

    public function index() 
    {
        $data = $this->manager->folderInfo('/documents');
        $files = $data['files'];
        $documents = $this->documentRepository->page();
        return view('backend.documents.index', compact('documents', 'files'));
    }

    public function upload(Request $request) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $result = $this->manager->store($file, '/documents', $fileName);
        return response()->json($result);
    }

    public function update(UpdateDocumentRequest $request, $id)
    {
        $document = $this->documentRepository->getById($id);
        if ($document) {
            $updateData = [
                'text' => $request->get('text'),
                'link' => $request->get('link')
            ];
            $this->documentRepository->update($id, $updateData);
        }

        return redirect()->route('backend_documents_index');
    }

    public function create(DocumentRequest $request)
    {
        $this->documentRepository->store(
            [
                'text' => $request->get('text'), 
                'link' => $request->get('link')
            ]
        );
        return redirect()->route('backend_documents_index');
    }

    public function edit($id)
    {
        $document = $this->documentRepository->getById($id);
        $data = $this->manager->folderInfo('/documents');
        $files = $data['files'];
        return view('backend.documents.edit', compact('document', 'files'));
    }
    public function delete($id)
    {
        $this->documentRepository->destroy($id);
        return redirect()->route('backend_documents_index');
    }
}