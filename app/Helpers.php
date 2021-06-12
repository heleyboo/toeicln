<?php

if (! function_exists('admin_url')) {
    /**
     * Get admin url.
     *
     * @param  string $uri
     * @return string
     */
    function admin_url($uri)
    {
        return url('/dashboard/' . $uri);
    }
}

if(!function_exists('human_filesize')) {
    /**
     * Get a readable file size.
     *
     * @param $bytes
     * @param int $decimals
     * @return string
     */
    function human_filesize($bytes, $decimals = 2) {
        $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];

        $floor = floor((strlen($bytes)-1)/3);

        return sprintf("%.{$decimals}f", $bytes/pow(1024, $floor)).@$size[$floor];
    }
}

if(!function_exists('isActive')) {
    /**
     * Determine the nav if it is the current route.
     *
     * @param string $nav
     * @return boolean
     */
    function isActive($nav) {
        return Route::currentRouteName() == $nav ? 'active' : '';
    }
}

if(!function_exists('translug')) {
    /**
     * Translate the slug to english.
     *
     * @param string $slug
     * @return string
     */
    function translug($slug) {
        return app('Translug')->translate($slug);
    }
}

if(!function_exists('lang')) {
    /**
     * Trans for getting the language.
     *
     * @param string $text
     * @param  array $parameters
     * @return string
     */
    function lang($text, $parameters = [])
    {
        return trans('blog.'.$text, $parameters);
    }
}

use App\Article;
use App\Slider;
use App\Contact;
use App\Document;
class WidgetHelper {
    public static function recentPosts() {
        return Article::orderBy('created_at', 'DESC')->get()->take(5);
    }
    public static function popularPosts() {
        return Article::orderBy('view_count', 'DESC')->get()->take(5);
    }

    public static function sliders() {
        return Slider::orderBy('id')->get()->take(10);
    }

    public static function homeArticle() {
        $articleId = SettingHelper::setting('home_page');
        if ($articleId) {
            return Article::find($articleId);
        } else {
            return null;
        }
    }

    public static function documents() {
        return Document::all();
    }

    public static function contacts() {
        return Contact::all();
    }
}

use App\Setting;
class SettingHelper {
    public static function setting($key) {
        $setting = Setting::where('setting_id', $key)->first();
        if ($setting) {
            return $setting->value;
        } else {
            return '';
        }
    }
}

use App\Repositories\MenuRepository;
use App\Menu;

class MenuHelper {
    public static function menu() {
        $menuRepository = new MenuRepository(new Menu());
        $menu = null;
        $rootMenuItems = null;
        try {
            $menu = $menuRepository->getById(1);
            $rootMenuItems = $menu->items->where('parent_id', 0);

        ?>
        <ul class="navbar-nav mr-auto">
        <?php foreach ($rootMenuItems as $item) { ?>
            <?php if(count($item->children) > 0) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                    href="http://google.com" 
                    id="dropdown<?php echo $item->id ?>"
                    aria-haspopup="true" aria-expanded="false"><?php echo $item->text ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown<?php echo $item->id ?>">
                    <?php foreach($item->children as $child) { ?>
                        <a class="dropdown-item" href="<?php echo $child->link ?>"><?php echo $child->text; ?></a>
                    <?php } ?>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $item->link ?>"><?php echo $item->text; ?></a>
                </li>
            <?php } ?>
            
        <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo route('frontend_contact') ?>">Liên hệ</a>
            </li>
        </ul>
            <?php } catch(Exception $ex) {}
    }

}
?>