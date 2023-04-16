

<div class="portal-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a class="navbar-brand"rel="home" href="/" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button id="swiper-btn" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="material-icons-outlined">keyboard_tab</span></button>
                </div>
                <div id="stats-container" class="col-md-7">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div id="swipe" class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="progress">
                                            <div class="progress-bar bg-default" role="progressbar" style="width: 62%;"
                                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <h6 class="nav-link">$10245.32 <span class="sr-only">(current)</span>
                                            </h6>
                                            <span>Balance</span>
                                            </li>
                                            <li class="nav-item">
                                                <h6 class="nav-link">$10245.32</h6>
                                                <span>Equity</span>
                                            </li>
                                            <li class="nav-item">
                                                <h6 class="nav-link">$10245.32</h6>
                                                <span>Used Margin</span>
                                            </li>
                                            <li class="nav-item">
                                                <h6 class="nav-link">$10245.32</h6>
                                                <span>Free Margin</span>
                                            </li>
                                            <li class="nav-item">
                                                <h6 class="nav-link">$10245.32</h6>
                                                <span>Bonus</span>
                                            </li>
                                            <li class="nav-item">
                                                <h6 class="nav-link">$10245.32</h6>
                                                <span>P&L</span>
                                            </li>
                                            <li class="nav-item">
                                                <div class="dropdown open">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>Balance</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="BalanceSwitch">
                                                                        <label class="custom-control-label" for="BalanceSwitch"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>Equity</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="EquitySwitch">
                                                                        <label class="custom-control-label" for="EquitySwitch"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>Used Margin</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="UsedMargin">
                                                                        <label class="custom-control-label" for="UsedMargin"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>Free Margin</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="FreeMargin">
                                                                        <label class="custom-control-label" for="FreeMargin"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>Bonus</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="Bonus">
                                                                        <label class="custom-control-label" for="Bonus"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item container-fluid">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span>P&L</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span>$10245.32</span>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-switch col-">
                                                                        <input type="checkbox" class="custom-control-input" id="P&L">
                                                                        <label class="custom-control-label" for="P&L"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 hide-on-desktop show-on-mobile">
                                        <div class="row">
                                            <div class="col p-0">
                                                <h4><img src="<?php bloginfo('template_url'); ?>/img/verified.svg" alt="">Vip Club</h4>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown open">
                                                    <a class="btn btn-default dropdown-toggle text-default" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Andrew O.
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hide-on-mobile">
                    <div class="row w-100">
                        <div class="col p-0">
                            <h4><img src="<?php bloginfo('template_url'); ?>/img/verified.svg" alt="">Vip Club</h4>
                        </div>
                        <div class="col p-0">
                            <div class="dropdown open">
                            <img src="<?php bloginfo('template_url'); ?>/img/user.svg" alt="..." class="img-thumbnail">
                                <a class="btn btn-default dropdown-toggle text-default" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Andrew O.</a>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item disabled" href="#">Disabled action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid main">
        <div class="row">
            <div class="col-md-2">
                <div id="mySidenav" class="sidenav">
                    <ul class="navbar-nav mr-auto nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><span class="material-icons-outlined">home</span>Dashboard</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" id="trade-tab" data-toggle="tab" href="#trade" role="tab" aria-controls="trade" aria-selected="false"><span class="material-icons-outlined">poll</span>Trade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="copy-tab" data-toggle="tab" href="#copy" role="tab" aria-controls="copy" aria-selected="false"><span class="material-icons-outlined">content_copy</span>Copy Trade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false"><span class="material-icons-outlined">people</span>Social Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="positions-tab" data-toggle="tab" href="#positions" role="tab" aria-controls="positions" aria-selected="false"><span class="material-icons-outlined">topic</span>Positions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="clubs-tab" data-toggle="tab" href="#clubs" role="tab" aria-controls="clubs" aria-selected="false"><span class="material-icons-outlined">groups</span>Clubs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="promotions-tab" data-toggle="tab" href="#promotions" role="tab" aria-controls="promotions" aria-selected="false"><span class="material-icons-outlined">offline_bolt</span>Promotions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false"><span class="material-icons-outlined">credit_card</span>Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false"><span class="material-icons-outlined">support_agent</span>Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><span class="material-icons-outlined">settings</span>Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">dashboard</div>
                    <div class="tab-pane fade" id="trade" role="tabpanel" aria-labelledby="trade-tab">trade</div>
                    <div class="tab-pane fade" id="copy" role="tabpanel" aria-labelledby="copy-tab">copy</div>
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">social</div>
                    <div class="tab-pane fade" id="positions" role="tabpanel" aria-labelledby="positions-tab">positions</div>
                    <div class="tab-pane fade" id="clubs" role="tabpanel" aria-labelledby="clubs-tab">clubs</div>
                    <div class="tab-pane fade" id="promotions" role="tabpanel" aria-labelledby="promotions-tab">promotions</div>
                    <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">payments</div>
                    <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">support</div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">settings</div>
                </div>
            </div>
        </div>
    </div>
</div>
