<?php

namespace Controllers;
use Core\Controller;
use Models\Pages;

class MainPagesController extends Controller
{
    private $pages;

    public function __construct()
    {
        parent::__construct();
        $this->pages = new Pages();
    }

    ////////////////////////////////////////HOMEPAGE/////////////////////////////////////

    public function renderHomePage()
    {
        view('user/enia_home.view.php', [
            'homepagecontents' => $this->pages->getContentsHomePage(),
        ]);
    }

    /////////////////////////////////ABOUT US///////////////////////////////////////////////

    public function renderAboutUsPage()
    {
        view('user/denis_aboutus.view.php',[
            'data' => $this->pages->getContentsAboutUsPage()
        ]);

    }

    ////////////////////////////////ERROR//////////////////////////////////////////////////

    public function renderErrorPage()
    {
        view('user/denis_error.view.php');
    }

    public function renderChangeContents(){
        view('admin/enia_changeContents.view.php', [
            'homepagecontents' => $this->pages->getContentsHomePage(),
            'aboutuscontents' => $this->pages->getContentsAboutUsPage(),
            'footercontents' => $this->pages->getContentsFooter()
        ]);
    }

    public function updateContents() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            parse_str(file_get_contents('php://input'), $_POST);
            
            $homeContents = $_POST['home-content'];
            $aboutUsContents = $_POST['about-us-content'];
            // $footerContents = [
            //     'facebook' => $_POST['footer-facebook'],
            //     'twitter' => $_POST['footer-twitter'],
            //     'instagram' => $_POST['footer-instagram']
            // ];

            $this->pages->updateContentsHomePage($homeContents);
            $this->pages->updateContentsAboutUsPage($aboutUsContents);
            // $this->pages->updateContentsFooter($footerContents);

            redirect('/changeContents');
            exit;
        }
    }

}
