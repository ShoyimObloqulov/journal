<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?=$_SESSION['name']?></p>
          <p class="app-sidebar__user-designation"><?=$_SESSION['email']?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="index.php">
            <i class="app-menu__icon fa fa-home"></i>
            <span class="app-menu__label">Bosh sahifa</span>
          </a>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Maqolalar</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="fcreate.php"><i class="icon fa fa-send"></i>Maqola yuborish</a></li>
            <li><a class="treeview-item" href="fcrud.php" rel="noopener"><i class="icon fa fa-edit"></i> Maqolalarni ko'rish</a></li>
            
          </ul>
        </li>
         <li>
          <a class="app-menu__item" href="xabar.php">
            <i class="app-menu__icon fa fa-comment"></i>
            <span class="app-menu__label">Xabarlar</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="team.php">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Tahriryat azolar</span>
          </a>
        </li>
      </ul>
    </aside>