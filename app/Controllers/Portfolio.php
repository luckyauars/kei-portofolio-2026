<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        if ($this->isMobile()) {
            return redirect()->to('/mobile');
        }

        $data = [
            'title' => 'Home - My Portfolio',
            'page' => 'home'
        ];
        return view('layout/main', $data);
    }

    public function mobile()
    {
        if (!$this->isMobile()) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Portfolio (Mobile)',
            'page' => 'mobile'
        ];
        return view('layout/main', ['page' => 'mobile']);
    }

    public function maintenance()
    {
        return view('pages/maintenance');
    }

    private function isMobile()
    {
        $userAgent = $this->request->getUserAgent();
        return $userAgent->isMobile();
    }

    public function work()
    {
        if ($this->isMobile())
            return redirect()->to('/mobile#work');
        $data = [
            'title' => 'My Work - Portfolio',
            'page' => 'my_work'
        ];
        return view('layout/main', $data);
    }

    public function experience()
    {
        if ($this->isMobile())
            return redirect()->to('/mobile#experience');
        $data = [
            'title' => 'Experience - Portfolio',
            'page' => 'experience'
        ];
        return view('layout/main', $data);
    }

    public function education()
    {
        if ($this->isMobile())
            return redirect()->to('/mobile#education');
        $data = [
            'title' => 'Education - Portfolio',
            'page' => 'education'
        ];
        return view('layout/main', $data);
    }

    public function about()
    {
        if ($this->isMobile())
            return redirect()->to('/mobile#about');
        $data = [
            'title' => 'About Me - Portfolio',
            'page' => 'about'
        ];
        return view('layout/main', $data);
    }
}
