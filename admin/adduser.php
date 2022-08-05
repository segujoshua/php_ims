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
                                    <input type="text" class="span11" placeholder="Last name" name="lastname" />
                                </div>

                                <div class="control-group">
                                    <label class="control-label">User Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="User name" name="username" />
                                    </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password </label>
                                <div class="controls">
                                    <input type="password"  class="span11" placeholder="Enter Password"  name="password" />
                                </div>
                            </div>

                                <div class="control-group">
                                    <label class="control-label">Role :</label>
                                    <div class="controls">
                                        <select name="role" class="span11">
                                            <option>user</option>
                                            <option>admin</option>
                                        </select>
                                    </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                                    <div class="alert alert-danger">
                                        This Username Already Exist! Please Try Another.
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

