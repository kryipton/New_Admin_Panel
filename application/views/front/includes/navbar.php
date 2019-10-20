<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

    <div class="container">

        <div class="logo pull-left">
            <h2><a href="index-2.html"><!-- <img  class="logo-img" href="<?php echo base_url("public/front/")?>images/w-logo.png" alt=""> -->Padhai</a></h2>
        </div>

        <div id="navbar" class="navbar-nav-wrapper pull-right">
            <ul class="nav navbar-nav navbar-right" id="responsive-menu">

                <!--Ana sehife-->
                <li <?php if ($this->uri->segment(2)=="Home") { ?>class="active" <?php } ?> >
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Home');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Home');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Home');
                    }

                    ?>"> <?php echo $this->lang->line("ana_sehife"); ?>
                    </a>
                </li>
                <!--Ana sehife-->




                <!--Haqqimizda-->
                <li <?php if ($this->uri->segment(2)=="About") { ?>class="active" <?php } ?>>
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/About');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/About');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/About');
                    }

                    ?>">
                        <?php echo $this->lang->line("haqqimizda"); ?>
                    </a>
                </li>
                <!--Haqqimizda-->




                <!--Kursalar-->
                <li>
                    <a href="#"><?php echo $this->lang->line("kurslar"); ?> <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="courses.html">Courses Grid</a></li>
                        <li><a href="courses-slider.html">Courses Slider</a></li>
                        <li class="active"><a href="courses-detail.html">Courses Detail</a></li>
                    </ul>
                </li>
                <!--Kursalar-->




                <!--Muelllimler-->
                <li>
                    <a href="#"><?php echo $this->lang->line("muellimler"); ?> <i class="fa fa-angle-down"></i></a>
                </li>
                <!--Muelllimler-->




                <!--Tedbirler-->
                <li <?php if ($this->uri->segment(2)=="Events") { ?>class="active" <?php } ?>  >
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Events');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Events');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Events');
                    }

                    ?>">
                        <?php echo $this->lang->line("tedbirler"); ?>
                    </a>
                </li>
                <!--Tedbirler-->


                <!--Elaqe-->
                <li <?php if ($this->uri->segment(2)=="Contact") { ?>class="active" <?php } ?> >
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Contact');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Contact');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Contact');
                    }

                    ?>">
                        <?php echo $this->lang->line("elaqe"); ?>
                    </a>
                </li>
                <!--Elaqe-->


                <!--Dil-->
                <li>
                    <a href="#"><?php echo $this->lang->line("dil"); ?><i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php

                            $segment2 = $this->uri->segment(2);
                            $segment3 = $this->uri->segment(3);
                            $segment4 = $this->uri->segment(4);

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("az/" . $segment2);
                            }else{
                                echo base_url("az/Home");
                            }

                            ?>">Az</a>
                        </li>
                        <li>
                            <a href="<?php

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("en/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("en/" . $segment2);
                            }else{
                                echo base_url("en/Home");
                            }

                            ?>">En</a>
                        </li>
                        <li>
                            <a href="<?php

                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                echo base_url("ru/" . $segment2   . "/" .  $segment3);
                            }elseif(!empty($this->uri->segment(2))){
                                echo base_url("ru/" . $segment2);
                            }else{
                                echo base_url("ru/Home");
                            }

                            ?>">Ru</a>
                        </li>
                    </ul>
                </li>
                <!--Dil-->

            </ul>
        </div><!--/.nav-collapse -->
    </div>

    <div id="slicknav-mobile"></div>
</nav>
