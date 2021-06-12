<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Repositories\LinkRepository;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    protected $manager;
    protected $link;

    public function __construct(LinkRepository $link)
    {

        $this->manager = app('uploader');

        $this->link = $link;
    }

    /**
     * Response the folder info.
     * 
     * @param  Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $data = $this->manager->folderInfo($request->get('folder'));
        return view('backend.files.index', compact('data'));
    }

    public function getImages(Request $request) {
        $data = $this->manager->folderInfo($request->get('folder'));
        return response()->json($data);
    }

    /**
     * Upload the file for file manager.
     *
     * @param  Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadForManager(Request $request)
    {
        $file = $request->file('file');

        $fileName = $request->get('name')
                    ? $request->get('name').'.'.explode('/', $file->getClientMimeType())[1]
                    : $file->getClientOriginalName();

        $path = str_finish($request->get('folder'), '/');

        if ($this->manager->checkFile($path.$fileName)) {
            return $this->response->withBadRequest('This File exists.');
        }

        $result = $this->manager->store($file, $path, $fileName);

        return $this->response->json($result);
    }

    /**
     * Generic file upload method.
     * 
     * @param  ImageRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fileUpload(ImageRequest $request)
    {
        $strategy = $request->get('strategy', 'images');

        if (!$request->hasFile('image')) {
            return $this->response->json([
                'success' => false,
                'error' => 'no file found.',
            ]);
        }

        $path = $strategy . '/' . date('Y') . '/' . date('m') . '/' . date('d');

        $result = $this->manager->store($request->file('image'), $path);

        return $this->response->json($result);
    }

    /**
     * Create the folder.
     * 
     * @param  Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFolder(Request $request)
    {
        $folderName = $request->get('folder_name');
        $parentFolder = $request->get('parent');
        $folder = $parentFolder . '/' . $folderName;

        $data = $this->manager->createFolder($folder);
        return redirect()->route('backend_files', 'folder=' . $parentFolder);
    }

    /**
     * Delete the folder.
     * 
     * @param  Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFolder(Request $request)
    {
        $delFolder = $request->get('del_folder');
        $parentFolder = $request->get('folder');
        
        $folder = $parentFolder. '/' . $delFolder;
        
        $data = $this->manager->deleteFolder($folder);

        // if(!$data) {
        //     return $this->response->withForbidden('The directory must be empty to delete it.');
        // }

        return redirect()->route('backend_files', 'folder=' . $parentFolder);
    }

    /**
     * Delete the file.
     * 
     * @param  Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFile(Request $request)
    {
        $path = $request->get('path');

        $data = $this->manager->deleteFile($path);

        return redirect()->route('backend_files');
    }
}
