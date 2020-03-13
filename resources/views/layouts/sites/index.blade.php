@extends('layouts.app')
@section('title', 'Responsive Resume/CV Template for Developers')
@section('content')
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <!--            <img class="profile" src="assets/images/profile.png" alt=""/>-->
                <h1 class="name"> {{$profiles->name}}</h1>
                <h3 class="tagline">{{$profiles->post}}</h3>
            </div><!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i>
                        <a href="mailto: {{$profiles->email}}">
                            {{$profiles->email}}</a></li>
                    <li class="phone"><i class="fa fa-phone"></i>
                        <a href="tel:{{$profiles->phone}}">
                            {{$profiles->phone}}</a></li>

                    <li class="linkedin"><i class="fa fa-linkedin"></i>
                        <a href="{{$profiles->LinkedIn}}"
                           target="_blank">{{$profiles->LinkedIn}}</a>
                    </li>
                    <li class="github"><i class="fa fa-github"></i>
                        <a href="{{$profiles->github}}"
                           target="_blank">{{$profiles->github}}</a>
                    </li>
                    <li class="twitter"><i class="fa fa-twitter"></i>
                        <a href="{{$profiles->twitter}}"
                           target="_blank">{{$profiles->twitter}}</a>
                    </li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                @foreach($education as $educations)
                <div class="item">
                    <h4 class="degree">{{$educations->courses}}</h4>
                    <h5 class="meta">{{$educations->training}}</h5>
                    <div class="time">{{$educations->published_start}} - {{$educations->published_end}} </div>
                </div><!--//item-->
                @endforeach

            </div><!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    @foreach($languages as $lang)
                    <li>{{$lang->lang}}<span class="lang-desc">( {{$lang->hold}})</span></li>

                </ul>
            </div><!--//interests-->

            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">

                    <li>{{$lang->title}}</li>
                    @endforeach
                </ul>
            </div><!--//interests-->

        </div><!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p>{{$career_profiles->title}}</p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                @foreach($experiences as $career)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$career->post}}</h3>
                            <div class="time">{{$career->published_start}} - {{$career->published_end}}</div>
                        </div><!--//upper-row-->
                        <div class="company">{{$career->place}}</div>
                    </div><!--//meta-->
                    <div class="details">

                        <p>{{$career->duty}}</p>
                    </div><!--//details-->
                </div><!--//item-->

                @endforeach
            </section><!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>{{$career_profiles->about}}</p>
                </div><!--//intro-->
                @foreach($projects as $project)
                <div class="item">
                <span class="project-title">
                    <a href="{{$project->href}}"
                       target="_blank">{{$project->projects}}</a></span> -
                    <span class="project-tagline">{{$project->description}}</span>
                </div><!--//item-->
                @endforeach
            </section><!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">
                    @foreach($skills as $skill)
                    <div class="item">
                        <h3 class="level-title">{{$skill->skill}}</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="{{$skill->percent}}">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->
                    @endforeach

                </div>
            </section><!--//skills-section-->

        </div><!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">WEBDesigned with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Roev Evgen</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->

@endsection
