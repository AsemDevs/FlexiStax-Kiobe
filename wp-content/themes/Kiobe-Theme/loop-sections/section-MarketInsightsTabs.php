
<section class="markets-insights">
    <div class="container">
        <div class="row market-insights-desktop d-md-block d-none">
            <div class="col-md-12 p-0">
                <div class="tabable-boxes-container">
                    <!-- Tab Links/imgs -->
                    <div class="tab">
                        <button class="tabable-box tablinks active-tab" onclick="openBox(event, 'Most-Trended')"><span class="material-icons-outlined">stacked_bar_chart</span><span class="SFProText-Semibold">Most trended</span></button>
                        <button class="tabable-box tablinks" onclick="openBox(event, 'Top-Risers')"><span class="material-icons-outlined">arrow_circle_up</span><span class="SFProText-Semibold">Top risers</span></button>
                        <button class="tabable-box tablinks" onclick="openBox(event, 'Top-Fallers')"><span class="material-icons-outlined">arrow_circle_down</span><span class="SFProText-Semibold">Top fallers</span></button>
                        <button class="tabable-box tablinks" onclick="openBox(event, 'Most-volatile')"><span class="material-icons-outlined">local_fire_department</span><span class="SFProText-Semibold">Most volatile</span></button>
                    </div>
                    <!-- Tab Content -->
                    <div id="Most-Trended" class="tabcontent active-tab" style="display: block;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-content">
                                        <table class="insights">
                                            <tr>
                                                <th>NAME</th>
                                                <th>Bid</th>
                                                <th>ASK</th>
                                                <th>Change</th>
                                                <th>volatile 24h</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/EURUSD.svg">
                                                    <span class="SFProText-bold">EURUSD<br>
                                                        <span class="SFProText-lite">EUR / U.S DOLLAR</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/GBPUSD.svg">
                                                    <span class="SFProText-bold">GBPUSD</span>
                                                    <br><span class="SFProText-lite">BRITISH POUND / U.S. DOLLAR</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/JPYUSD.svg">
                                                    <span class="SFProText-bold">JPYUSD</span><br>
                                                    <span class="SFProText-lite">JAPANESE YEN / U.S. DOLLAR</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/AUDUSD.svg">
                                                    <span class="SFProText-bold">AUDUSD</span><br>
                                                    <span class="SFProText-lite">AUSTRALIAN DOLLAR / U.S. D…</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/CADUSD.svg">
                                                    <span class="SFProText-bold">CADUSD</span><br>
                                                    <span class="SFProText-lite">CANADIAN DOLLAR / U.S. D…</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/CHFUSD.svg">
                                                    <span class="SFProText-bold">CHFUSD</span><br>
                                                    <span class="SFProText-lite">SWISS FRANC / U.S. DOL…</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Top-Risers" class="tabcontent">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Top-Fallers" class="tabcontent">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Most-volatile" class="tabcontent">
                    <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row market-insights-resp d-md-none d-block">
            <div class="col-md-12 p-0">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-Most-Trended-tab" data-toggle="pill" href="#pills-Most-Trended" role="tab" aria-controls="pills-Most-Trended" aria-selected="true">Most trended</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-Top-Risers-tab" data-toggle="pill" href="#pills-Top-Risers" role="tab" aria-controls="pills-Top-Risers" aria-selected="false">Top risers</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-Top-Fallers-tab" data-toggle="pill" href="#pills-Top-Fallers" role="tab" aria-controls="pills-Top-Fallers" aria-selected="false">Top fallers</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-Most-volatile-tab" data-toggle="pill" href="#pills-Most-volatile" role="tab" aria-controls="pills-Most-volatile" aria-selected="false">Most volatile</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Most-Trended" role="tabpanel" aria-labelledby="pills-Most-Trended-tab">
                    </div>
                    <div class="tab-pane fade" id="pills-Top-Risers" role="tabpanel" aria-labelledby="pills-Top-Risers-tab">
                    </div>
                    <div class="tab-pane fade" id="pills-Top-Fallers" role="tabpanel" aria-labelledby="pills-Top-Fallers-tab">
                    </div>
                    <div class="tab-pane fade" id="pills-Most-volatile" role="tabpanel" aria-labelledby="pills-Most-volatile-tab">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>