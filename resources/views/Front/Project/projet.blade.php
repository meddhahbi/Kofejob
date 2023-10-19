
@extends('Layouts.Project')

@section('content')

    <div class="col-xl-3 col-md-4 theiaStickySidebar">
        <div class="settings-widget">
            <div
                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                <a href="user-account-details.html"></a>
                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                    <a href="user-account-details.html">
                        <h3 class="mb-0">  <i class="fas fa-sitemap" style="margin-right: 5px;"></i>  Categories</h3>
                    </a>
                </div>
            </div>
            @foreach ($categories as $category)
                <div class="settings-menu" style="border-bottom: 1px solid #ccc; padding: 5px 0;">
                    <ul>
                        <li class="nav-item" >
                            <a href="{{ route('projet.indexFront', ['category' => $category->slug]) }}" class="nav-link">
                                {{ $category->slug }}
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>
    </div>


    <div class="col-xl-9 col-md-8">
        <div class="page-title">
                                    <h3>Manage Projects</h3>
                                </div>
        <nav class="user-tabs mb-4">
                                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">

                                        <li class="nav-item">
                                            <a class="nav-link active" href="freelancer-ongoing-projects.html">Ongoing Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="freelancer-completed-projects.html">Completed Projects</a>
                                        </li>

                                    </ul>
                                </nav>


                            @foreach($projets as $projet)

                            <div class="my-projects-list">
                                <div class="row">
                                    <div class="col-lg-12 flex-wrap">
                                        <div class="projects-card flex-fill">
                                            <div class="card-body">
                                                <div class="projects-details align-items-center">

                                                    <div class="project-info project">
                                                        <span>Dreamguystech</span>
                                                        <h2>{{$projet->title}}</h2>
                                                        <div class="proposal-client">
                                                            <h4 class="title-info">Client Price</h4>
                                                            <div class="d-flex">
                                                                <h3 class="client-price me-2">{{$projet->budget}}DNT</h3>
                                                                <p class="amnt-type">( FIXED )</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="project-hire-info project">
                                                        <div class="content-divider"></div>
                                                        <div class="proposer-info project">

                                                            <div class="proposer-detail">
                                                                <h4>{{$projet->company}}</h4>
                                                                <ul class="proposal-details">
                                                                    <li> {{$projet->created_at}}</li>
                                                                    <li><i class="fas fa-star text-primary"></i> Technology: {{$projet->technology}}</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="content-divider"></div>
                                                        <div class="projects-action text-start project">
                                                            <a href="freelancer-view-project-detail.html" class="projects-btn project">Category: {{$projet->category->name}} </a>
                                                            <p class="hired-detail">Project taken on</p>
                                                            <p class="hired-date">{{$projet->start_date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach




        <div class="row">
            <div class="col-md-12">
                <ul class="paginations list-pagination">
                    <li class="page-item"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="active">1</a></li>
                    <li class="page-item"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
