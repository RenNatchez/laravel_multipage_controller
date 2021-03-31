<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{$section_2->title_1}}</span>
                        <span class="section-heading-lower">{{$section_2->title_2}}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[0]}}
                            <span class="ml-auto">{{$section_2->close}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[1]}}
                            <span class="ml-auto">{{$section_2->open_full}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[2]}}
                            <span class="ml-auto">{{$section_2->open_full}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[3]}}
                            <span class="ml-auto">{{$section_2->open_full}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[4]}}
                            <span class="ml-auto">{{$section_2->open_full}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[5]}}
                            <span class="ml-auto">{{$section_2->open_full}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$section_2->days[6]}}
                            <span class="ml-auto">{{$section_2->open_litle}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$section_2->street}}</strong>
                            <br>
                            {{$section_2->city}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{$section_2->call_me}}</em>
                        </small>
                        <br>
                        {{$section_2->phone}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
