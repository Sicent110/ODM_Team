

            <div class="row clearfix">

                <?php 
                $len = count($projects);//projects是查询数据库之后的返回结果数量，是一个数组，而数组中的元素也是数组，表示项目。这就是得到项目的数量

                if ($len !== 0){
                    for($i=0;$i<$len;$i++){
                        $projinfo = $projects[$i];
                        $url = site_url("project/show?projectid=".strval($projinfo['id']));//strval为获取变量的字符串值，而projinfo也即是project表中的id
                        echo '
                        <div class="col-md-4 column">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span>
                                        '.$projinfo['projectname'].'
                                    </span>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <button data-toggle="dropdown" align="right" class="btn dropdown-toggle" >操作</button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                     <a href="'.site_url('project/del?projectid='.$projinfo['id']).'" id="">删除项目</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <br><br>

                                </div>
                                <a href="'.$url.'">
                                    <div class="panel-body">
                                        '.$projinfo['intro'].'
                                    </div>
                                </a>
                                <div class="panel-body">
                                </div>
                            </div>
                        </div>   
                        ';
                    }  //其中projinfo[intro]是表示项目的说明文字

                }

                ?>
                <a id="modal-add-new-project" href="#modal-container-add-new-project" role="button" class="" data-toggle="modal">
                   <!-- 这个超链接点击之后是有js控制 -->
                    <div class="col-md-4 column">
                        <div class="panel panel-default">
<!--
                            <div class="panel-heading">
                                <h3 class="panel-title">

                                </h3>
                            </div> 
-->
                            <div class="panel-body" >
                                <h2 align="center">添加新项目 </h2>
                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>   
                </a>

            </div>
            
<!--         </div>
    </div>
</div> -->