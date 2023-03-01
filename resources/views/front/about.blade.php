@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">About university</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="index.html" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a href="aboutUniversity.html" class="aboutUniversity__menu__link">About university</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- aboutContint start -->

    <div class="aboutContint">
        <section class="container">
            <div class="aboutContint__cart">
                <div class="aboutContint__text">
                    <p>
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                    </p>
                    <p>
                        <img src="foto/slick_3.png" alt="aboutContint">
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- aboutContint end -->


    <!-- aboutStatistics start -->

    <div class="aboutStatistics">
        <section class="container">
            <div class="aboutStatistics__cart">
                <h2 class="about__title__h2">Statistics</h2>

                <ul class="aboutStatistics__menu">
                    <li>
                        <h2 class="advantages__title__h2 numbers">200</h2>
                        <div class="advantages__text">
                            <p>Unde omnis iste natus error</p>
                        </div>
                    </li>

                    <li>
                        <h2 class="advantages__title__h2 numbers">50</h2>
                        <div class="advantages__text">
                            <p>Voluptatem accusantium</p>
                        </div>
                    </li>

                    <li>
                        <h2 class="advantages__title__h2 numbers">75</h2>
                        <div class="advantages__text">
                            <p>Doloremque laudantium</p>
                        </div>
                    </li>

                    <li>
                        <h2 class="advantages__title__h2 numbers">200</h2>
                        <div class="advantages__text">
                            <p>Inventore veritatis quasi</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutStatistics end -->


    <!-- aboutVideo start -->

    <div class="aboutVideo">
        <section class="container">
            <div class="aboutVideo__cart">
                <div class="aboutVideo__list clearfix">

                    <section class="aboutVideo__video">
                        <div class="about__item">
                            <p class="text-center">
                                <a data-fancybox class="about__item__video" href="https://youtu.be/G4qaiWGeO5w?list=RDUWw40cW4_tg&t=2">
                                    <section>
                                        <img class="inline" alt="" src="{{ asset('front/foto/about.png') }}"/>
                                        <!-- play start -->

                                        <div class="button__min is-play">
                                            <div class="button-outer-circle has-scale-animation"></div>
                                            <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                            <div class="button-icon is-play">
                                                <img class="about__item__img__play" alt="All" src="foto/pley.svg">
                                            </div>
                                        </div>

                                        <!-- play end -->
                                    </section>
                                </a>
                            </p>
                        </div>
                    </section>

                    <div class="aboutContint__text">
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                         <br>
                        <p>
                            Ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- aboutVideo end -->

   @endsection
