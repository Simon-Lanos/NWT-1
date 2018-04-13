<?php include('header.php');

/* REQUETTE */

$db = new DB();

//nb Eleve global
$eleveTotal = $db->select("SELECT * FROM users JOIN roles ON users.roleId = roles.roleId WHERE roleName='eleve'");
//nb Eleve en cours
$eleveActif = $db->select("SELECT * FROM users JOIN usergroups ON users.userId = usergroups.Users_userId
                                      JOIN groups ON usergroups.Groups_groupId = groups.groupId
                                      JOIN promotions ON groups.idPromotion = promotions.idPromotion WHERE promotionIsActive=true");
//nb user
$nbUser = $db->select("SELECT * FROM users");
//nb ticket
$nbTicket = $db->select("SELECT * FROM tickets");
//nb reservation
$nbReservation = $db->select("SELECT * FROM zonesreservations");
//nb intervenant
$nbIntervenant = $db->select("SELECT * FROM users JOIN roles ON users.roleId = roles.roleId WHERE roleName='intervenant'");
//mobilier fixe
$nbMobileFixe = $db->select("SELECT * FROM furnitures");
//mobilier mobile
$nbMobilierMobile = $db->select("SELECT * FROM equipments");


//valeur fake
$eleveTotal = 180;
$eleveActif = 60;
$nbUser = 220;
$nbTicket = 5;
$nbReservation = 580;
$nbIntervenant = 30;
$nbMobileFixe = 100;
$nbMobilierMobile = 20;

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Statistique</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3><?php echo $eleveTotal; ?></h3>

              <p>Elèves au total</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $eleveActif; ?></h3>

              <p>Elève présent à la NWS</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $nbUser; ?></h3>

              <p>Utilisateurs enregistrés</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $nbTicket; ?></h3>

              <p>Tickets</p>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green-active">
            <div class="inner">
              <h3><?php echo $nbReservation; ?></h3>

              <p>Reservations</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal-active">
            <div class="inner">
              <h3><?php echo $nbIntervenant; ?></h3>

              <p>Intervenants</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $nbMobileFixe; ?></h3>

              <p>Mobiliers fixes</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $nbMobilierMobile; ?></h3>

              <p>Mobiliers mobiles</p>
            </div>
            <div class="icon">
              <i class="fa fa-television"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php include('footer.html'); ?>