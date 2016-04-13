{extends "layout.tpl"}
{block name="content"}
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Quan Tri</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quan Ly <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{$path}/ngo-hung-phuc/update">San Pham</a></li>
            <li><a href="#">Nguoi Dung</a></li>
            <li><a href="#">Don Hang</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="col-md-12"> 
        {if isset($smarty.session.user)}
        Hello {$smarty.session.user}
        {/if}
        </div>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{$path}/ngo-hung-phuc/dang-xuat">Log out</a></li>
            <li><a href="#">Change password</a></li>
          </ul>
        </li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

{/block}