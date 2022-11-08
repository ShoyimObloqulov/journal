<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?=$_SESSION['name']?></p>
          <p class="app-sidebar__user-designation"><?=$_SESSION['email']?></p>
        </div>
      </div>

      <ul class="app-menu">
         <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-book"></i>
            <span class="app-menu__label">Maqolalar</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="app-menu__item" href="maqola.php">
                <i class="app-menu__icon fa fa-circle"></i>
                <span class="app-menu__label">Kelib tushgan maqolalar</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="aktiv.php">
                <i class="app-menu__icon fa fa-circle"></i>
                <span class="app-menu__label">Qabul qilingan maqolalar</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="tulangan.php">
                <i class="app-menu__icon fa fa-circle"></i>
                <span class="app-menu__label">To'lov qilingan maqolalar</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="print.php">
                <i class="app-menu__icon fa fa-circle"></i>
                <span class="app-menu__label">Chop qilingan maqolalar</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="noprint.php">
                <i class="app-menu__icon fa fa-circle"></i>
                <span class="app-menu__label">Qabul qilinmagan maqolalar</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a class="app-menu__item" href="all.php">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Maqola joylash</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="expert.php">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Expertlar</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="topic.php">
            <i class="app-menu__icon fa fa-tasks" aria-hidden="true"></i>
            <span class="app-menu__label">To'plamlar</span>
          </a>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-text-width"></i>
            <span class="app-menu__label">Sayt</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu treeview">
            <li>
              <a class="app-menu__item" href="user.php">
                <i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">User</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="contact.php">
                <i class="app-menu__icon fa fa-telegram"></i>
                <span class="app-menu__label">Contact</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="footer.php">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Footer</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="team.php">
                <i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Taxriryat azolari</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="count.php">
                <i class="app-menu__icon fa fa-book"></i>
                <span class="app-menu__label">Jurnal Soni</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="elon.php">
                <i class="app-menu__icon fa fa-comment"></i>
                <span class="app-menu__label">Elonlar</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="about.php">
                <i class="app-menu__icon fa fa-info-circle"></i>
                <span class="app-menu__label">About</span>
              </a>
            </li>
            
            <li>
              <a class="app-menu__item" href="policies.php">
                <i class="app-menu__icon fa fa-lock"></i>
                <span class="app-menu__label">Policies</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="privacy.php">
                <i class="app-menu__icon fa fa-shield"></i>
                <span class="app-menu__label">Privacy</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="public.php">
                <i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">public</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="submissions.php">
                <i class="app-menu__icon fa fa-paper-plane"></i>
                <span class="app-menu__label">Submissions</span>
              </a>
            </li>
            <li>
              <a class="app-menu__item" href="sayt.php">
                <i class="app-menu__icon fa fa-globe"></i>
                <span class="app-menu__label">Sayt qo'shish</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </aside>