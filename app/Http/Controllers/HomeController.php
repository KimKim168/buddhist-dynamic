<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

use App\Models\Page;
use App\Models\Heading;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Slide;
use App\Models\Video;
use App\Models\Image;
use App\Models\Audio;
use App\Models\Article;
use App\Models\News;
use App\Models\Menu;
use App\Models\WebsiteInfo;
use Image as ImageCompress;
use DB;
use Illuminate\Support\Facades\Schema;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    // public function index()
    // {
    //    $homeTopPages = Page::where('position', 'home_top')->limit(3)->orderBy('order_index')->get();
    //    $homeBottomPages = Page::where('position', 'home_bottom')->limit(3)->orderBy('order_index')->get();
    //    $homeSlides = Slide::where('position', 'home_slides')->orderBy('order_index')->get();
    //    $homeImage = Gallery::where('position', 'home')->first();
    //     return view('client.index', [
    //         'homeTopPages' => $homeTopPages,
    //         'homeBottomPages' => $homeBottomPages,
    //         'homeImage' => $homeImage,
    //         'homeSlides' => $homeSlides,
    //     ]);
    // }

    public function index()
    {
        return redirect()->route('login');

    }

    public function whyrepeatgym()
    {

        // $servicesPages = Page::where('position', 'services')->orderBy('order_index')->get();
        $whyRepeatGymGallery = Gallery::where('position', 'why_repeat_gym_gallery')->orderBy('order_index')->get();
        // $whyRepeatGymGalleryBackground = Gallery::where('position', 'why_repeat_gym_gallery_background')->first();
        $whyRepeatGymCertifiedCoachLeft = Gallery::where('position', 'why_repeat_gym_certified_coach_left')->first();
        $whyRepeatGymCertifiedCoachRight = Gallery::where('position', 'why_repeat_gym_certified_coach_right')->first();
        $ourMissionFirstImage = Gallery::where('position', 'our_mission_first_image')->first();
        $ourMissionSecondImage = Gallery::where('position', 'our_mission_second_image')->first();

        // $aboutImage = Gallery::where('position', 'about')->first();

        $whyRepeatGymBanner = Gallery::where('position', 'why_repeat_gym_banner')->first();
        // return $whyRepeatGymBanner;

        $ourMissionHeading = Heading::where('position', 'our_mission')->first();
        // $whyChooseUsHeading = Heading::where('position', 'why_choose_us')->first();

        return view('client.why_repeat_gym', compact(
            'whyRepeatGymBanner',
            'whyRepeatGymGallery',
            'whyRepeatGymCertifiedCoachLeft',
            'whyRepeatGymCertifiedCoachRight',
            'ourMissionHeading',
            'ourMissionFirstImage',
            'ourMissionSecondImage'
        ));
    }


    public function service()
    {
        // $ourServiceGalleryBackground = Gallery::where('position', 'our_service_gallery_background')->first();
        // $trainingOptionTopBackground = Gallery::where('position', 'training_option_top_background')->first();
        // return $ourServiceGalleryBackground;
        $ourServiceGalleryImage = Gallery::where('position', 'our_service_gallery_image')->orderBy('order_index')->get();
        $trainingOptionSlideImageTop = Gallery::where('position', 'training_option_image_slide_top')->orderBy('order_index')->get();
        $trainingOptionSlideImageBottom = Gallery::where('position', 'training_option_image_slide_bottom')->orderBy('order_index')->get();
        $groupTranning = Heading::where('position', 'group_tranning')->first();
        $groupTranningItem = Heading::where('position', 'group_tranning_item')->orderBy('position')->get();
        $persionalTranning = Heading::where('position', 'persional_tranning')->first();
        $persionalTranningItem = Heading::where('position', 'persional_tranning_item')->orderBy('position')->get();
        $ourServiceSlides = Slide::where('position', 'our_services_slides')->orderBy('order_index')->get();


        return view('client.service', compact(
            'ourServiceGalleryImage',
            'trainingOptionSlideImageTop',
            'trainingOptionSlideImageBottom',
            'groupTranning',
            'groupTranningItem',
            'persionalTranning',
            'persionalTranningItem',
            'ourServiceSlides'

        ));
    }

    public function testimonial()
    {
        $testimonialBanner = Gallery::where('position', 'testimonial_banner')->first();
        $testimonialsCompetition = Page::where('position', 'testimonials_competition')->orderBy('order_index')->get();
        // $tips = Page::where('position', 'tips')->orderBy('order_index')->get();

        $videosTop = Video::where('position', 'videos_top')->first();
        $videosBottoms = Video::where('position', 'videos_bottom')->orderBy('id')->limit(3)->get();

        return view('client.testimonial', [
            'testimonialBanners' => $testimonialBanner,
            'videosTop' => $videosTop,
            'videosBottoms' => $videosBottoms,
            'testimonialsCompetition' => $testimonialsCompetition,
            // 'tips'=>$tips,
        ]);
    }

    public function contact()
    {
        // $contactInfo = Contact::first();

        $informations = Contact::all();

        $contactUs = Gallery::where('position', 'contact_us_banner')->first();

        return view('client.contact_us', [
            'informations' => $informations,
            'contactUs' => $contactUs,
        ]);
    }

    public function tip()
    {

        $tips = News::orderBy('id', 'asc')->paginate(10);

        return view('client.tip', [
            'tips' => $tips
        ]);
    }

    public function show($id)
    {
        $tip = News::findOrFail($id);
        // return $tip;

        return view('client.tip_show', compact('tip'));
    }

    // public function product()
    // {
    //     $productsPages = Page::where('position', 'products')->orderBy('order_index')->get();

    //     return view('client.product', compact(
    //         'productsPages',
    //     ));
    // }

    // public function projects()
    // {
    //     $completedProjectsPages = Page::where('position', 'completed_projects')->orderBy('order_index')->get();
    //     $completedProjectHeading = Heading::where('position', 'completed_projects')->first();

    //     return view('client.projects', compact(
    //         'completedProjectsPages',
    //         'completedProjectHeading',
    //     ));
    // }

    public function customer_joinded()
    {
        return view('client.customer_joinded');
    }

    public function news(Request $request)
    {
        $search = $request->search;

        $newsPages = News::orderBy('id', 'DESC')->when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%')
                ->where('description', 'LIKE', '%' . $search . '%');
        })->get();

        $ourBlogHeading = Heading::where('position', 'our_blog')->first();

        return view('client.news', compact(
            'newsPages',
            'ourBlogHeading'
        ));
    }


    public function detail($id)
    {
        $page = Page::findOrFail($id);
        return view('client.page_detail', compact(
            'page'
        ));
    }



    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        return view('client.news_detail', compact(
            'news'
        ));
    }
}