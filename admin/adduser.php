 <?php
 include "header.php"
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Dashboard" class="tip-bottom"><i class="icon-home"></i>
            Add New User</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Add New User</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">First Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="First name" name="fristname" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Last Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Last name" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password input</label>
                                <div class="controls">
                                    <input type="password"  class="span11" placeholder="Enter Password"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Company info :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Company name" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description field:</label>
                                <div class="controls">
                                    <input type="text" class="span11" />
                                    <span class="help-block">Description field</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Message</label>
                                <div class="controls">
                                    <textarea class="span11" ></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<?php 
 include "footer.php"
?>

