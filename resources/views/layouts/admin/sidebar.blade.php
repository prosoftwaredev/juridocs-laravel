<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
      <!-- BEGIN SIDEBAR MENU -->
      <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
      <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
      <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
      <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
      <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
      <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
      <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper">
          <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
          <div class="sidebar-toggler">
          </div>
          <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
          <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
          <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
          <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
          <form class="sidebar-search " action="extra_search.html" method="POST">
            <a href="javascript:;" class="remove">
            <i class="icon-close"></i>
            </a>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
              <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
              </span>
            </div>
          </form>
          <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="documents">
          <a href="javascript:;">
            <i class="fa fa-edit"></i>
            <span class="title">Documents</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li class="documents_list">
              <a href="/admin/document">
              <i class="fa fa-list-ul"></i>
              Documents</a>
            </li>
            <li class="add_list">
              <a href="/admin/document/add">
              <i class="fa fa-plus-square"></i>
              Add Document</a>
            </li>
          </ul>
        </li>
        <li class="glossaries">
          <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span class="title">Glossaries</span>
            <span class="arrow"></span>
          </a>
          <ul class="sub-menu">
            <li class="glossaries_list">
              <a href="/admin/glossary">
              <i class="fa fa-list-ul"></i>
              Glossaries</a>
            </li>
            <li class="glossary_add">
              <a href="/admin/glossary/add">
              <i class="fa fa-plus-square"></i>
              Add Glossary</a>
            </li>
          </ul>
        </li>
        <li class="categories">
          <a href="javascript:;">
            <i class="fa fa-list-ul"></i>
            <span class="title">Categories</span>
            <span class="arrow"></span>
          </a>
          <ul class="sub-menu">
            <li class="categories_list">
              <a href="/admin/category">
              <i class="fa fa-list-ul"></i>
              Categories</a>
            </li>
            <li class="category_add">
              <a href="/admin/category/add">
              <i class="fa fa-plus-square"></i>
              Add Category</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-building"></i>
            <span class="title">Companies</span>
            <span class="arrow"></span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-chain"></i>
            <span class="title">Grammar</span>
            <span class="arrow"></span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-user"></i>
            <span class="title">Users</span>
            <span class="arrow"></span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-cogs"></i>
            <span class="title">Settings</span>
            <span class="arrow"></span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-power-off"></i>
            <span class="title">Logout</span>
          </a>
        </li>
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
<!-- END SIDEBAR --> 