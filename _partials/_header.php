<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>GEC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo APP_URL ?>assets/images/gec.png">



    <!-- App css -->
    <link href="<?php echo APP_URL ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo APP_URL ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo APP_URL ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .left-sidebar .menu-body .nav-item .nav-link {
            color: #5a5c61;
            font-size: 13px;
            font-weight: bold;
        }

        .left-sidebar .navbar-vertical .navbar-nav .menu-label {
            padding: 3px;
        }

        body.dark-sidebar .left-sidebar {
            background-color: #1f5289 !important;
        }

        body.dark-sidebar .left-sidebar .menu-body .nav-item .nav-link {
            color: #fff;
        }

        body.dark-sidebar .left-sidebar .menu-body .nav-item .nav-link .menu-icon {
            color: #fff;
        }

        .left-sidebar .navbar-vertical .navbar-nav .menu-label {
            color: #0df5df;
        }

        .fw-semibold {
            font-weight: 750 !important;
        }

        .text-primary {
            --bs-text-opacity: 1;
            color: #0df5df !important;
        }

        #Main .nav-item .menu-icon {
            color: #08ff00;
        }
    </style>
</head>

<body id="body" class="dark-sidebar">
    <?php //if (!return_name_page("saisie_notes") and !return_name_page("verification_notes") and !return_name_page("correction_anomalies")) : ?>


        <!-- leftbar-tab-menu -->
        <div class="left-sidebar">
            <!-- LOGO -->




            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo APP_URL ?>accueil.php"><i class="ti ti-stack menu-icon"></i><span>&nbsp;Accueil</span></a>
                            </li>

                            <?php if (getPrivileges($idUserActif, "enrol_cdt_priv") or getPrivileges($idUserActif, "update_cdt_priv")) : ?>
                                <li class="menu-label mt-0 text-primary font-12 fw-semibold">CANDIDATS</li>
                            <?php endif ?>

                            <?php if (getPrivileges($idUserActif, "enrol_cdt_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>candidats/enroller.php"><i class="ti ti-edit menu-icon"></i><span>&nbsp;Enrôlement</span></a>
                                </li>
                            <?php endif ?>


                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo APP_URL ?>candidats/resultats.php"><i class=" ti ti-list menu-icon"></i><span>&nbsp;Liste des candidats</span></a>
                            </li>

                            <?php if (NombreRoleUSer($idUserActif)) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>candidats/filtre_candidats.php"><i class=" ti ti-users menu-icon"></i><span>&nbsp;Filtrer les candidats</span></a>
                                </li>
                            <?php endif ?>


                            <?php if (getPrivileges($idUserActif, "verif_doublon_priv") or getPrivileges($idUserActif, "photos_manquantes_priv") or getPrivileges($idUserActif, "transfere_cdt_priv") or getPrivileges($idUserActif, "import_export_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sideBarDonnes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBarDonnes">
                                        <i class="ti ti-adjustments menu-icon"></i>
                                        <span>Données</span>
                                    </a>
                                    <div class="collapse " id="sideBarDonnes">
                                        <ul class="nav flex-column">
                                            <?php if (getPrivileges($idUserActif, "verif_doublon_priv")) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>candidats/verification_doublon.php"><span>Vérifier doublons</span></a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (getPrivileges($idUserActif, "photos_manquantes_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>candidats/calcul_photos_manquantes.php" class="nav-link ">Photos manquantes</a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (getPrivileges($idUserActif, "transfere_cdt_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>candidats/transfere.php" class="nav-link ">Transfère</a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (getPrivileges($idUserActif, "import_export_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>candidats/import_export.php" class="nav-link ">Import/Export</a>
                                                </li>
                                            <?php endif ?>


                                        </ul>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if (getPrivileges($idUserActif, "saisie_note_priv") or getPrivileges($idUserActif, "verif_note_priv") or getPrivileges($idUserActif, "correction_ano_priv") or getPrivileges($idUserActif, "resultats_note_priv") or getPrivileges($idUserActif, "stats_notes_priv") or getPrivileges($idUserActif, "impression_fiches_priv")) : ?>

                                <li class="menu-label mt-0 text-primary font-12 fw-semibold">NOTES</li>

                            <?php endif ?>
                            <?php if (getPrivileges($idUserActif, "saisie_note_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>notes/saisie_notes.php"><i class=" ti ti-keyboard  menu-icon  "></i><span>&nbsp;Saisie des notes</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if (getPrivileges($idUserActif, "verif_note_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>notes/verification_notes.php"><i class=" ti ti-checkbox  menu-icon  "></i><span>&nbsp;Vérification des notes</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if (getPrivileges($idUserActif, "correction_ano_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>notes/correction_anomalies.php"><i class=" ti ti-checks  menu-icon   "></i><span> &nbsp;Correction des anomalies</span></a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a href="<?php echo APP_URL ?>notes/notes_manquantes.php" class="nav-link "><i class=" ti ti-checkbox  menu-icon  "></i> &nbsp;Notes manquantes</a>
                            </li>
                            <?php if (getPrivileges($idUserActif, "resultats_note_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>resultats/resultats_notes.php"><i class=" ti ti-list-check  menu-icon  "></i><span>&nbsp;Résultats</span></a>
                                </li>
                            <?php endif; ?>
                            <?php if (getPrivileges($idUserActif, "stats_notes_priv") or getPrivileges($idUserActif, "impression_fiches_priv") or getPrivileges($idUserActif, "impression_cartes_priv")) : ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="#sideBarReport" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBarReport">
                                        <i class="ti ti-adjustments menu-icon"></i>
                                        <span>Reporting</span>
                                    </a>
                                    <div class="collapse " id="sideBarReport">
                                        <ul class="nav flex-column">
                                            <?php if (getPrivileges($idUserActif, "stats_notes_priv")) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>reporting/statistiques.php"><i class="ti ti-chart-donut menu-icon"></i><span>&nbsp;Statistiques</span></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "impression_fiches_priv")) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>reporting/impression_etats.php"><i class="ti ti-file-export menu-icon   "></i><span>&nbsp;Impressions des fiches</span></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "impression_cartes_priv")) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>reporting/impression_cartes.php"><i class=" ti ti-file-export menu-icon"></i><span>&nbsp;Impression des cartes</span></a>
                                                </li>
                                            <?php endif ?>


                                        </ul>
                                    </div>
                                </li>
                            <?php endif ?>


                            <?php if (getPrivileges($idUserActif, "parametrage_priv") or getPrivileges($idUserActif, "config_centre_priv") or getPrivileges($idUserActif, "config_bts_priv") or getPrivileges($idUserActif, "config_matieres_priv") or getPrivileges($idUserActif, "config_instituts_priv") or getPrivileges($idUserActif, "config_annees_priv") or getPrivileges($idUserActif, "config_sign_priv") or getPrivileges($idUserActif, "config_poste_priv") or getPrivileges($idUserActif, "config_sessions_priv")) : ?>
                                <li class="menu-label mt-0 text-primary font-12 fw-semibold">APPLICATION</li>
                                <?php if (getPrivileges($idUserActif, "parametrage_priv")) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sideBarParametrage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBarParametrage">
                                            <i class="ti ti-adjustments menu-icon"></i>
                                            <span>Paramétrage</span>
                                        </a>
                                        <div class="collapse " id="sideBarParametrage">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>parametrages/anonymisation.php"><span>Anonymisation</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>parametrages/fusion.php"><span>Fusion</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>parametrages/param_moyenne.php" class="nav-link ">Calcul de Moyennes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>parametrages/session_active.php" class="nav-link ">Session active</a>
                                                </li>
                                                

                                            </ul>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>


                            <?php if (getPrivileges($idUserActif, "parametrage_priv") or getPrivileges($idUserActif, "config_centre_priv") or getPrivileges($idUserActif, "config_bts_priv") or getPrivileges($idUserActif, "config_matieres_priv") or getPrivileges($idUserActif, "config_instituts_priv") or getPrivileges($idUserActif, "config_annees_priv") or getPrivileges($idUserActif, "config_sign_priv") or getPrivileges($idUserActif, "config_poste_priv") or getPrivileges($idUserActif, "config_sessions_priv")) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                        <i class="ti ti-settings menu-icon"></i>
                                        <span>Configurations</span>
                                    </a>
                                    <div class="collapse " id="sidebarAnalytics">
                                        <ul class="nav flex-column">
                                            <?php if (getPrivileges($idUserActif, "config_centre_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_centre.php" class="nav-link ">Centre</a>
                                                </li>

                                            <?php endif ?>

                                            <?php if (getPrivileges($idUserActif, "config_instituts_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_institut.php" class="nav-link ">Instituts</a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if (getPrivileges($idUserActif, "config_bts_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_bts.php" class="nav-link ">BTS</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "config_matieres_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_matiere.php" class="nav-link ">Matières</a>
                                                </li>
                                            <?php endif; ?>

                                            

                                            <!--  <li class="nav-item">
                                            <a href="configuration_dren.php" class="nav-link ">DPEN</a>
                                        </li> -->
                                            <?php if (getPrivileges($idUserActif, "config_annees_priv")) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo APP_URL ?>configurations/configuration_annee.php">Années</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "config_sessions_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_session.php" class="nav-link ">Sessions</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "config_sign_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_signataire.php" class="nav-link ">Signataires</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_diplomes.php" class="nav-link ">Diplômes</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "config_poste_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>configurations/configuration_poste.php" class="nav-link ">Poste</a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="nav-item">
                                                <a href="<?php echo APP_URL ?>configurations/configuration_mot_de_passe.php" class="nav-link ">Mot de passe</a>
                                            </li>

                                        </ul>
                                        <!--end nav-->
                                    </div>
                                    <!--end sidebarAnalytics-->
                                </li>
                                <!--end nav-item-->

                            <?php endif ?>

                            <?php if (getPrivileges($idUserActif, "add_user_priv") or getPrivileges($idUserActif, "update_user_priv") or getPrivileges($idUserActif, "delete_user_priv")) : ?>

                                <li class="menu-label mt-0 text-primary font-12 fw-semibold">UTILISATEURS</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo APP_URL ?>users/gerer_utilisateur.php?viewuser=1"><i class="ti ti-users menu-icon"></i><span>Gestion des utilisateurs</span></a>
                                </li>

                            <?php endif ?>

                            <?php if (getPrivileges($idUserActif, "publication_result_priv") or getPrivileges($idUserActif, "publication_concours_priv") or getPrivileges($idUserActif, "publication_actu_priv") or getPrivileges($idUserActif, "publication_stats_priv")) : ?>

                                <li class="menu-label mt-0 text-primary font-12 fw-semibold">SITE INTERNET<br><span class="font-10 text-secondary fw-normal"></span></li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarSiteInternet" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSiteInternet">
                                        <i class="ti ti-settings menu-icon"></i>
                                        <span>Gestion du site internet</span>
                                    </a>
                                    <div class="collapse " id="sidebarSiteInternet">
                                        <ul class="nav flex-column">
                                            <?php if (getPrivileges($idUserActif, "publication_result_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>backend/resultats_bts.php" class="nav-link ">Résultats BTS</a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (getPrivileges($idUserActif, "publication_stats_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>backend/stats_bts.php" class="nav-link ">Statistiques BTS</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "publication_concours_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>backend/resultats_concours.php" class="nav-link ">Résultats Concours</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (getPrivileges($idUserActif, "publication_actu_priv")) : ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo APP_URL ?>backend/actualites_bts.php" class="nav-link ">Actualités</a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                        <!--end nav-->
                                    </div>
                                    <!--end sidebarAnalytics-->
                                </li>

                            <?php endif ?>

                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">AUTRES</li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo APP_URL ?>logout.php"><i class="ti ti-logout menu-icon"></i><span>Déconnexion</span></a>
                            </li>
                        </ul>

                    </div>
                    <!--end sidebarCollapse-->
                </div>
            </div>
        </div>
        <?php if (!return_name_page("saisie_notes") and !return_name_page("verification_notes") and !return_name_page("correction_anomalies")) : ?>
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">


                <ul class="list-unstyled topbar-nav mb-2" style=" font-weight: bold; text-transform: uppercase;">
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li>
                    <li>
                        <?php $An = date('Y'); ?>
                        UTILISATEUR : <?php echo $loginUserActif ?> <br> 
                        <!-- SESSION ACTIVE : <?php //echo get_active_session($An)->numero; ?> -->
                    </li>

                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <?php endif ?>
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->
    <?php //endif ?>
    <noscript>
<h2>Javascript est désactivé dans votre navigateur web. Certaines fonctionnalités ne fonctionneront pas correctement.</h2>
<style type="text/css">
#page-wrapper {
  display: none;
}
</style>
</noscript>