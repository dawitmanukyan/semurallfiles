<?php 
  require "./admin-protection/protection.php";
  require "./config/config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Ավելացնել Ենթակատեգորիա</title>
    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <aside id="side-overlay">
        <div class="content-header border-bottom">
          <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
          </a>  
        </div>
        <div class="content-side">
        </div>
      </aside>
      <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header">
          <?php echo '<a class="fw-semibold text-dual" href="Semur-admin-panel.php?h='.$_GET['h'].'">'; ?>
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Semur <span class="fw-normal">& Co</span></span>
          </a>
          <div>
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
          </div>
        </div>
        <div class="js-sidebar-scroll">
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <?php echo '<a class="nav-main-link" href="Semur-admin-panel.php?h='.$_GET['h'].'">' ?>
                  <i class="nav-main-link-icon si si-speedometer"></i>
                  <span class="nav-main-link-name">Կառավարման վահանակ</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-question"></i>
                  <span class="nav-main-link-name">Տեղեկություններ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                  <?php echo '<a class="nav-main-link" href="Info.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Կայքի տեղեկություններ</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="Add-info.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Ավելացնել տեղեկություններ</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="editinfo.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Խմբագրել Տեղեկությունները</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-layers"></i>
                  <span class="nav-main-link-name">Կատեգորիաներ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                  <?php echo '<a class="nav-main-link" href="Categories.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Կայքում առկա Կատեգորիաները</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="Add-categories.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Ավելացնել Կատեգորիա</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="Subcategories.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Կայքում առկա ենթակատեգորիաները</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link active" href="Add-subcategories.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Ավելացնել ենթակատեգորիա</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-picture"></i>
                  <span class="nav-main-link-name">Նկարներ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="Gallery.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Կայքում առկա նկարները</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo' <a class="nav-main-link" href="Add-image.php?h='.$_GET['h'].'"> '; ?>
                      <span class="nav-main-link-name">Ավելացնել նկարներ</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-grid"></i>
                  <span class="nav-main-link-name">Ապրանքներ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <?php echo ' <a class="nav-main-link" href="Items.php?h='.$_GET['h'].'"> '; ?>
                      <span class="nav-main-link-name">Կայքում առկա ապրանքներ</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                  <?php echo ' <a class="nav-main-link" href="Add-item.php?h='.$_GET['h'].'"> '; ?>
                      <span class="nav-main-link-name">Ավելացնել ապրանք</span>
                    </a>
                  </li>
                </ul>
              </li>

              
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-note"></i>
                  <span class="nav-main-link-name">Բլոգ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                  <?php echo' <a class="nav-main-link" href="Blog-admin.php?h='.$_GET['h'].'"> '; ?>
                      <span class="nav-main-link-name">Առկա բլոգները</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                  <?php echo' <a class="nav-main-link" href="Add-blog.php?h='.$_GET['h'].'"> '; ?>
                      <span class="nav-main-link-name">Ստեղծել բլոգ</span>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-folder-alt"></i>
                  <span class="nav-main-link-name">Հաշվետվություններ</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                  <?php echo '<a class="nav-main-link" href="Reports.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Կայքում առկա հաշվետվությունները</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <?php echo '<a class="nav-main-link" href="Add-reports.php?h='.$_GET['h'].'">' ?>
                      <span class="nav-main-link-name">Ավելացնել հաշվետվություններ</span>
                    </a>
                  </li>
                </ul>
              </li>
        </div>
      </nav>
      <header id="page-header">
        <div class="content-header">
          <div class="d-flex align-items-center">
          </div>
          <div class="d-flex align-items-center">
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">Admin</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mb-0 text-muted fs-sm fw-medium">Semur & Co</p>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="Admin.php">
                    <span class="fs-sm fw-medium">Դուրս գալ</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </header>
      <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-primary-dark">
          <div class="content content-full text-center pt-7 pb-6">
            <h1 class="h2 text-white mb-2">
            Ավելացնել Ենթակատեգորիա
            </h1>
            <h2 class="h4 fw-normal text-white-75 mb-0">
              Semur & Co
            </h2>
          </div>
        </div>
     <?php  echo' <form action="Add-subcategories-proccess.php?h='.$_GET['h'].'" method="post" enctype="multipart/form-data" style="padding: 15px;"> ';?>
            <div class="mb-4">
                <label class="form-label" for="example-text-input">Ենթակատեգորիաի անվանումը Հայերեն</label>
                <input type="text" class="form-control" id="example-text-input" name="subcat-name-arm" placeholder="Օրինակ Ցանցեր">
            </div>
            <div class="mb-4">
                <label class="form-label" for="example-text-input">Ենթակատեգորիաի անվանումը Ռուսերեն</label>
                <input type="text" class="form-control" id="example-text-input" name="subcat-name-ru" placeholder="Օրինակ Сетка">
            </div>
            <div class="mb-4">
                <label class="form-label" for="example-text-input">Ենթակատեգորիաի անվանումը Անգլերեն</label>
                <input type="text" class="form-control" id="example-text-input" name="subcat-name-eng" placeholder="Օրինակ Meshes">
            </div>

            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <label class="form-label" for="example-select">Որ կատեգորիա -ի կամ ենթակատեգորիա -ի մեջ է մտնում</label>
                    <select class="form-select" id="example-select" name="cat-id">
                        <?php 
                            $asr = $mysql -> query("SELECT * FROM `assortment`");
                            foreach($asr as $value){
                                echo '<option value="'.$value['category_id'].'">'.$value['type-arm'].' ('.$value['type-ru'].','.$value['type-eng'].' Կատեգորիա)</option>';
                            }
                            $sub = $mysql -> query("SELECT * FROM `subcategories`");
                            foreach($sub as $value){
                              echo '<option value="'.$value['category_id'].'">'.$value['type-arm'].' ('.$value['type-ru'].','.$value['type-eng'].' Ենթակատեգորիա)</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label" for="example-file-input">Ենթակատեգորիաի նկարը (Ընտրեք նկարը համակարգչից, ավելացնելու համար)</label>
                <input class="form-control" type="file" name="file" id="example-file-input">
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px;">+ Ավելացնել</button>
        </form>
        <div class="bg-body-dark">
        </div>
      </main>
      <label class="form-label" for="example-file-input" style="text-align: center;">Ուշադրություն։ Բոլոր ավելացրած կատեգորիաները հայտնվելու են կայքի "Գլխավոր" էջի "կատեգորիաներ" հատվածում նաև կայքի "Մենյու" - ում։</label>
    <script src="assets/js/oneui.app.min.js"></script>
    <script src="assets/js/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
  </body>
</html>