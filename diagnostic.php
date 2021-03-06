<?php
session_start();
if(!isset($_SESSION['id'])){
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <title>OUTILS AUTO_DIAGNOSTIC</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/vuetify.min.css">
<link rel="stylesheet" type="text/css" href="css/commonstyle2.css">
</head>
<body>
<h1>  Autodiagnostic selon la norme ISO 27001: 2013</h1>
<hr>


<!--navbar-->
<?php
include('navbar.php');
?>
<!--navbar-->
<script src="js/vue.js"></script>
<script src="js/vuetify.js"></script>
<script>
    new Vue({
      el: '#nav-bar',
      vuetify: new Vuetify(),
    })
</script>



<!--etiquette des exigences-->
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<b>
<div  class="red"; style="background-color:wheat"  id="print2" >
	<div class="col-md">
		<hr>
		<h1 style="width: 100%; text-align: center;">
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:#fff207; text-transform: uppercase;"> <b>QUESTIONNAIRE DE L'AUDIT</b> </a>
		</h1>
		<table class="table table-hover" style="font-size: 15px; padding: 20px;" border="4" cellspacing=4>
			<thead>
				<th>Nom</th>
				<th>reponse </th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.0 CONTEXTE DE L&#x27;ORGANISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.1 COMPRENDRE L&#x27;ORGANISATION ET SON CONTEXTE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">2.	L&#x27;organisation a-t-elle d??termin?? les probl??mes internes et externes qui sont pertinents pour l&#x27;objectif du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">1: 1.	L&#x27;organisation a-t-elle d??termin?? le ou les objectifs du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">3.	L&#x27;organisation a-t-elle d??termin?? comment les questions internes et externes pourraient influencer la capacit?? du SMSI ?? atteindre les r??sultats escompt??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.2 COMPRENDRE LES BESOINS ET LES ATTENTES DES PARTIES INT??RESS??ES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.	L&#x27;organisation a-t-elle d??termin?? les parties int??ress??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.	La liste de toutes les exigences des parties int??ress??es existe-t-elle ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.3 D??TERMINER LE CHAMP D&#x27;APPLICATION DU SYST??ME DE GESTION DE LA S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6. La port??e est-elle document??e avec des limites et une applicabilit?? clairement d??finie ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.4 SYST??ME DE GESTION DE LA S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7. Avez-vous ??tabli, document??, mis en ??uvre, maintenu et am??lior?? en permanence un syst??me de gestion de la s??curit?? des informations conform??ment aux exigences de la norme ISO 27001 ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.0 LEADERSHIP </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.1 LEADERSHIP ET LEADERSHIP DE L&#x27;ENGAGEMENT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.	Les objectifs g??n??raux du SMSI sont-ils compatibles avec l&#x27;orientation strat??gique ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.	La direction s&#x27;assure-t-elle que les ressources ISMS n??cessaires sont disponibles selon les besoins ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">10.	La direction s&#x27;assure-t-elle que le SGSI atteint les r??sultats escompt??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.2 POLITIQUE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">11.	Existe-t-il une politique de s??curit?? de l&#x27;information avec des objectifs inclus ou un cadre pour fixer des objectifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">12.	La politique de s??curit?? de l&#x27;information est-elle document??e et communiqu??e au sein de l&#x27;entreprise et aux autres parties int??ress??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.3 R R??LES, RESPONSABILIT??S ET AUTORIT??S DE L&#x27;ORGANISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">13. Les r??les, les responsabilit??s et les pouvoirs en mati??re de s??curit?? de l&#x27;information sont-ils attribu??s et communiqu??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.0 PLANIFICATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.1 ACTIONS POUR FAIRE FACE AUX RISQUES ET OPPORTUNIT??S </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">14.	Les questions internes et externes, ainsi que les exigences des parties int??ress??es, sontelles prises en compte lors du traitement des risques et des opportunit??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">15.	Existe-t-il un processus document?? pour identifier les risques de s??curit?? de l&#x27;information, y compris les crit??res d&#x27;acceptation des risques et les crit??res d&#x27;??valuation des risques ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">16.	Le processus de traitement des risques est-il document??, y compris les options de traitement des risques et la mani??re de cr??er une d??claration d&#x27;applicabilit?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.2 LES OBJECTIFS DE S??CURIT?? DE L&#x27;INFORMATION ET LA PLANIFICATION POUR LES ATTEINDRE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">17.	Des objectifs et des cibles en mati??re de s??curit?? de l&#x27;information sont-ils ??tablis au niveau des fonctions pertinentes de l&#x27;organisation, mesur??s lorsque cela est possible, et coh??rents avec la politique de s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">18.	Existe-t-il un plan, ou un groupe de plans, pour atteindre les objectifs et les cibles de s??curit?? de l&#x27;information, y compris la responsabilit?? d??sign??e, la m??thode d&#x27;??valuation, ainsi que les moyens et le calendrier du ou des plans ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.0 SUPPORT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.1 RESSOURCES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">19.	Des ressources ad??quates sont-elles pr??vues pour tous les ??l??ments du SGSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.2 COMP??TENCE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">20. Les comp??tences appropri??es sont-elles ??valu??es, et une formation est-elle dispens??e si n??cessaire, pour le personnel effectuant des t??ches susceptibles d&#x27;affecter la s??curit?? des informations ? Des registres des comp??tences sont-ils tenus ?? jour ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.3 SENSIBILISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">21. Le personnel conna??t-il la politique de s??curit?? de l&#x27;information, son r??le et les cons??quences du non-respect des r??gles ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.4 COMMUNICATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">22.	Existe-t-il un processus de communication relatif ?? la s??curit?? des informations, y compris les responsabilit??s et ce qu&#x27;il faut communiquer, ?? qui et quand ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.5 INFORMATIONS DOCUMENT??ES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">23.	La documentation du SGSI comprend-elle la politique de s??curit?? de l&#x27;information, les objectifs et les cibles, le champ d&#x27;application du SGSI, les principaux ??l??ments et leur interaction, les documents et enregistrements de l&#x27;ISO 27001 et ceux identifi??s par l&#x27;entreprise ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">24.	Est-il garanti qu&#x27;une gestion des documents et des enregistrements existe, y compris qui examine et approuve les documents, et o?? et comment ils sont publi??s, stock??s et prot??g??s </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">25.	Les informations document??es d&#x27;origine externe sont-elles contr??l??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.0 OP??RATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.1 PLANIFICATION ET CONTR??LE OP??RATIONNELS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">26.	L&#x27;organisation dispose-t-elle des informations document??es n??cessaires pour ??tre s??re que ses processus sont ex??cut??s comme pr??vu ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">27.	Les changements planifi??s sont-ils contr??l??s ? Les cons??quences des changements non planifi??s sont-elles examin??es afin d&#x27;identifier des mesures d&#x27;att??nuation si n??cessaire ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">28.	Les processus externalis??s sont-ils identifi??s et contr??l??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.2 ??VALUATION DES RISQUES EN MATI??RE DE S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">29. Les risques, leurs propri??taires, la probabilit??, les cons??quences et le niveau de risque sont-ils identifi??s ? Ces r??sultats sont-ils document??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.3 TRAITEMENT DES RISQUES LI??S ?? L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">30.	Existe-t-il un plan de traitement des risques, approuv?? par les propri??taires des risques </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">31.	Existe-t-il une liste document??e de tous les contr??les jug??s n??cessaires, avec une justification appropri??e et un ??tat de mise en ??uvre ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.0 ??VALUATION DU RENDEMENT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.1 SURVEILLANCE, MESURE, ANALYSE ET ??VALUATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">32.	A-t-on d??fini ce qui doit ??tre mesur??, par quelle m??thode, qui est responsable, qui analysera et ??valuera les r??sultats ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">33.	Les r??sultats des mesures sont-ils document??s, analys??s et ??valu??s par des personnes responsables ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.2 AUDIT INTERNE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">34.	Existe-t-il un programme d&#x27;audit d??finissant le calendrier, les responsabilit??s, les rapports, les crit??res d&#x27;audit et la port??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/35" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">35.	Les audits internes sont-ils r??alis??s conform??ment ?? un programme d&#x27;audit, les r??sultats sont-ils communiqu??s dans un rapport d&#x27;audit interne et les mesures correctives pertinentes sont-elles prises ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.3 REVUE DE DIRECTION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/36" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">36.	La revue de direction est-elle effectu??e r??guli??rement, et les r??sultats sont-ils document??s dans le proc??s-verbal de la r??union ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/37" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">37.	La direction a-t-elle d??cid?? de toutes les questions cruciales importantes pour le succ??s du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">10.0 AM??LIORATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">ANNEXE A </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.5 POLITIQUES EN MATIERE DE SECURITE DE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/38" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">38.	Existe-t-il des politiques publi??es, approuv??es par la direction, pour soutenir la s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/39" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">39.	Les politiques de s??curit?? de l&#x27;information sont-elles revues et mises ?? jour ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.6 ORGANISATION DE LA S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/40" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">40.	Toutes les responsabilit??s en mati??re de s??curit?? de l&#x27;information sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/41" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">41.	Les fonctions et les responsabilit??s sont-elles correctement s??par??es compte tenu des situations de conflit d&#x27;int??r??ts ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/43" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">43.	Les contacts avec les groupes d&#x27;int??r??ts sp??ciaux ou les associations professionnelles sont-ils d??finis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/44" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">45.	Les projets prennent-ils en compte les aspects de s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/46" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">46.	Des r??gles de manipulation s??curis??e des appareils mobiles sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="Pas vraiment, mais bient??t" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/42" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">42.	Les contacts avec les autorit??s comp??tentes sont-ils d??finis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/47" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">47.	Existe-t-il des r??gles d??finissant comment les informations de l&#x27;organisation sont prot??g??es compte tenu des sites de t??l??travail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.7 S??CURIT?? DES RESSOURCES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/50" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">50.	La direction exige-t-elle activement que tous les employ??s et les contractants se conforment aux r??gles de s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/51" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">51.	Les employ??s et les contractants suivent-ils des formations pour mieux s&#x27;acquitter de leurs t??ches de s??curit??, et existe-t-il des programmes de sensibilisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/52" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">52.	L&#x27;organisation dispose-t-elle d&#x27;un processus disciplinaire formel ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/48" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">48.	L&#x27;organisation v??rifie-t-elle les ant??c??dents des candidats ?? l&#x27;embauche ou des contractants ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/49" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">49.	Existe-t-il des accords avec les employ??s et les contractants qui pr??cisent les responsabilit??s en mati??re de s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/53" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">53.	Existe-t-il des accords couvrant les responsabilit??s en mati??re de s??curit?? de l&#x27;information qui restent valables apr??s la fin du contrat de travail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.8 GESTION D&#x27;ACTIFS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/54" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">54.	Existe-t-il un inventaire des actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/55" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">55.	Chaque actif figurant dans l&#x27;inventaire des actifs a-t-il un propri??taire d??sign?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/56" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">56.	Les r??gles de traitement des informations et des actifs sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/57" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">57.	Les biens de l&#x27;entreprise sont-ils restitu??s par les employ??s et les contractants lorsque leur emploi prend fin ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/58" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">58.	Les crit??res de classification des informations sont-ils d??finis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/59" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">59.	Existe-t-il des proc??dures qui d??finissent la mani??re d&#x27;??tiqueter et de traiter les informations classifi??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/60" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">60.	Existe-t-il des proc??dures qui d??finissent la mani??re de traiter les actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/61" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">61.	Existe-t-il des proc??dures qui d??finissent la mani??re de traiter les supports amovibles conform??ment aux r??gles de classification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/62" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">62.	Existe-t-il des proc??dures formelles pour l&#x27;??limination des m??dias ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/63" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">63.	Le support qui contient des informations sensibles est-il prot??g?? pendant le transport ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.9 CONTR??LE D&#x27;ACC??S </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/64" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">64.	Existe-t-il une politique de contr??le d&#x27;acc??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/65" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">65.	Les utilisateurs ont-ils acc??s uniquement aux ressources auxquelles ils sont autoris??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/66" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">66.	Les droits d&#x27;acc??s sont-ils fournis par le biais d&#x27;un processus d&#x27;enregistrement formel ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/67" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">67.	Existe-t-il un syst??me formel de contr??le d&#x27;acc??s lors de la connexion aux syst??mes d&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/68" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">68.	Les droits d&#x27;acc??s privil??gi??s sont-ils g??r??s avec une attention particuli??re ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/69" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">69.	Les mots de passe et autres informations secr??tes d&#x27;authentification sont-ils fournis de mani??re s??curis??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/70" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">70.	Les propri??taires d&#x27;actifs v??rifient-ils p??riodiquement tous les droits d&#x27;acc??s privil??gi??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/71" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">71.	Les droits d&#x27;acc??s sont-ils mis ?? jour lorsqu&#x27;il y a un changement dans la situation de l&#x27;utilisateur (par exemple : changement organisationnel ou licenciement) ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/72" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">72.	Existe-t-il des r??gles pour les utilisateurs sur la mani??re de prot??ger les mots de passe et autres informations d&#x27;authentification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/73" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">73.	L&#x27;acc??s aux informations dans les syst??mes est-il limit?? conform??ment ?? la politique de contr??le d&#x27;acc??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/74" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">74.	La connexion s??curis??e est-elle requise sur les syst??mes conform??ment ?? la politique de contr??le d&#x27;acc??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/75" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">75.	Les syst??mes de gestion des mots de passe utilis??s par l&#x27;organisation aident-ils les utilisateurs ?? g??rer en toute s??curit?? leurs informations d&#x27;authentification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/76" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">76.	L&#x27;utilisation des outils utilitaires est-elle contr??l??e et limit??e ?? des employ??s sp??cifiques </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/77" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">77.	L&#x27;acc??s au code source est-il limit?? aux personnes autoris??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.10 CRYPTOGRAPHIE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/78" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">78.	Existe-t-il une politique visant ?? r??glementer le cryptage et les autres contr??les cryptographiques ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/79" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">79.	Les cl??s cryptographiques sont-elles correctement prot??g??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.11 S??CURIT?? PHYSIQUE ET ENVIRONNEMENTALE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/80" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">80.	Existe-t-il des zones s??curis??es qui prot??gent les informations sensibles ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/81" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">81.	L&#x27;entr??e des zones s??curis??es est-elle prot??g??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/82" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">82.	Les zones s??curis??es sont-elles situ??es de mani??re prot??g??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/83" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">83.	Les syst??mes d&#x27;alarme, de protection contre l&#x27;incendie et autres sont-ils install??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/84" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">84.	Les proc??dures de travail dans les zones s??curis??es sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/85" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">85.	Les zones de livraison et de chargement sont-elles prot??g??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/86" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">86.	L&#x27;??quipement est-il correctement prot??g?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/87" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">87.	L&#x27;??quipement dispose-t-il d&#x27;une protection contre les variations d&#x27;??nergie ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/88" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">88.	Les c??bles d&#x27;alimentation et de t??l??communication sont-ils prot??g??s de mani??re ad??quate ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/89" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">89.	L&#x27;??quipement est-il entretenu r??guli??rement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/90" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">90.	Le d??placement des informations et des ??quipements en dehors des locaux de l&#x27;organisation est-il contr??l?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/91" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">91.	Les actifs de l&#x27;organisation sont-ils correctement prot??g??s lorsqu&#x27;ils ne se trouvent pas dans les locaux de l&#x27;organisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/92" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">92.	Les informations sont-elles correctement retir??es des supports ou des ??quipements qui seront ??limin??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/93" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">93.	Existe-t-il des r??gles pour prot??ger les ??quipements lorsqu&#x27;ils ne sont pas en possession physique de leurs utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/94" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">94.	Les utilisateurs sont-ils inform??s de ce qu&#x27;ils doivent faire lorsqu&#x27;ils ne sont pas pr??sents ?? leur poste de travail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.12 S??CURIT?? OP??RATIONNELLE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/95" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">95.	Les proc??dures d&#x27;exploitation des processus informatiques sont-elles document??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/96" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">96.	Les changements qui pourraient affecter la s??curit?? de l&#x27;information sont-ils strictement contr??l??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/97" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">97.	Les ressources sont-elles contr??l??es et des plans sont-ils ??labor??s pour garantir leur capacit?? ?? r??pondre aux demandes des utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/98" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">98.	Les environnements de d??veloppement, de test et de production sont-ils s??par??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/99" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">99.	Les logiciels antivirus et autres logiciels de protection contre les logiciels malveillants sont-ils install??s et utilis??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/100" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">100.	Une politique de sauvegarde est-elle d??finie et ex??cut??e correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/101" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">101.	Les ??v??nements pertinents provenant des syst??mes informatiques sont-ils enregistr??s et v??rifi??s p??riodiquement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/102" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">102.	Les journaux sont-ils prot??g??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/103" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">103.	Les journaux de l&#x27;administrateur sont-ils correctement prot??g??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/104" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">104.	Les horloges de tous les syst??mes informatiques sont-elles synchronis??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/105" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">105 .L&#x27;installation de logiciels est-elle strictement contr??l??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/106" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">106.	L&#x27;information et la correction des vuln??rabilit??s sont-elles correctement g??r??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/107" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">107.	Existe-t-il des r??gles pour d??finir les restrictions d&#x27;installation de logiciels par les utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/108" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">108.	Les audits des syst??mes de production sont-ils planifi??s et ex??cut??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/109" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">109.	Les r??seaux sont-ils contr??l??s pour prot??ger les informations des syst??mes et des applications ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.13 S??CURIT?? DES COMMUNICATIONS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/110" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">110.	Les exigences de s??curit?? pour les services de r??seau sont-elles d??finies et incluses dans les accords ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/111" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">111.	Les r??seaux sont-ils s??par??s en fonction de la classification des risques et des actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/112" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">112.	Le transfert d&#x27;informations est-il correctement prot??g?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/113" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">113.	Les accords avec des tiers prennent-ils en compte la protection lors du transfert d&#x27;informations ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/114" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">114.	Les messages qui sont ??chang??s sur les r??seaux sont-ils correctement prot??g??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/115" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">115.	L&#x27;organisation ??num??re-t-elle toutes les clauses de confidentialit?? qui doivent ??tre incluses dans les accords avec les tiers ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.14 ACQUISITION ACQUISITION, D??VELOPPEMENT ET MAINTENANCE D&#x27;UN SYST??ME </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/116" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">116.	Les exigences de s??curit?? sont-elles d??finies pour les nouveaux syst??mes d&#x27;information, ou pour toute modification de ceux-ci ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/117" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">117.	Les informations relatives aux applications transf??r??es via les r??seaux publics sontelles prot??g??es de mani??re appropri??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/118" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">118.	Les informations relatives aux transactions transf??r??es par les r??seaux publics sontelles prot??g??es de mani??re appropri??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/119" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">119.	Des r??gles pour le d??veloppement s??curis?? des logiciels et des syst??mes sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/120" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">120.	Les modifications apport??es aux syst??mes nouveaux ou existants sont-elles correctement contr??l??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/121" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">121.	Les applications critiques sont-elles correctement test??es apr??s les modifications apport??es aux syst??mes d&#x27;exploitation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/122" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">122.	Les syst??mes d&#x27;information ne subissent-ils que les modifications n??cessaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/123" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">123.	Les principes d&#x27;ing??nierie des syst??mes s??curis??s sont-ils appliqu??s au processus de d??veloppement du syst??me d&#x27;organisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/124" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">124.	L&#x27;environnement de d??veloppement est-il correctement s??curis?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/125" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">125.	Le d??veloppement externalis?? des syst??mes est-il contr??l?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/126" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">126.	La mise en ??uvre des exigences de s??curit?? est-elle test??e pendant le d??veloppement du syst??me ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/127" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">127.	Les crit??res d&#x27;acceptation des syst??mes sont-ils d??finis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/128" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">128.	Les donn??es d&#x27;essai sont-elles soigneusement s??lectionn??es et prot??g??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.15 RELATIONS AVEC LES FOURNISSEURS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/129" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">129.	Existe-t-il une politique sur la mani??re de traiter les risques li??s aux fournisseurs et aux partenaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/130" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">130.	Les exigences de s??curit?? pertinentes sont-elles incluses dans les accords avec les fournisseurs et les partenaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/131" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">131.	Les accords avec les prestataires et les fournisseurs incluent-ils des exigences de s??curit?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/132" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">132.	Les fournisseurs sont-ils r??guli??rement contr??l??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/133" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">133.	Les changements impliquant des arrangements et des contrats avec des fournisseurs et des partenaires tiennent-ils compte des risques et des processus existants ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.16 GESTION DES INCIDENTS DE S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/134" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">134.	Les incidents sont-ils g??r??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/135" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">135.	Les ??v??nements li??s ?? la s??curit?? de l&#x27;information sont-ils signal??s de mani??re appropri??e ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/136" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">136.	Les employ??s et les contractants signalent-ils les faiblesses de s??curit?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/137" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">137.	Les ??v??nements de s??curit?? sont-ils ??valu??s et class??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/138" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">138.	Les proc??dures sur la fa??on de r??pondre aux incidents sont-elles document??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/139" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">139.	Les incidents de s??curit?? sont-ils analys??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/140" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">140.	Existe-t-il des proc??dures qui d??finissent la mani??re de collecter les preuves ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.17. ASPECTS DE LA GESTION DE LA CONTINUIT?? DES ACTIVIT??S LI??S ?? LA S??CURIT?? DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/141" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">141.	Les exigences en mati??re de continuit?? de la s??curit?? de l&#x27;information sont-elles d??finies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/142" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">142.	Existe-t-il des proc??dures qui assurent la continuit?? de la s??curit?? de l&#x27;information pendant une crise ou un d??sastre ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/143" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">143.	Des exercices et des tests de continuit?? sont-ils effectu??s ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/144" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">144.	La planification et le fonctionnement de l&#x27;infrastructure informatique pr??voient-ils une redondance (par exemple, un emplacement secondaire) ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.18 CONFORMIT?? </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/145" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">145.	Les exigences l??gislatives, r??glementaires, contractuelles et autres en mati??re de s??curit?? sont-elles connues ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/146" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">146.	Existe-t-il des proc??dures pour prot??ger les droits de propri??t?? intellectuelle ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/147" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">147.	Les documents sont-ils prot??g??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/148" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">148.	Les informations personnelles identifiables sont-elles correctement prot??g??es ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/149" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">149.	Les contr??les cryptographiques sont-ils utilis??s correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/150" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">150.	La s??curit?? de l&#x27;information est-elle r??guli??rement examin??e par un auditeur ind??pendant ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/151" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">151.	Les responsables v??rifient-ils r??guli??rement si les politiques et proc??dures de s??curit?? sont appliqu??es correctement dans leurs domaines de responsabilit?? ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/152" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">152.	Les syst??mes d&#x27;information sont-ils r??guli??rement examin??s pour v??rifier leur conformit?? aux politiques et normes de s??curit?? de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
			</tbody>
		</table>
	</div>
</div>

<!--etiquette des exigences-->

<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>DATE DU DERNIER AUDIT DE L'AUTODIAGNOSTIC 2
				<SCRIPT language="JavaScript">

	var
	derniereModif=document.lastModified;

	var dateModif = new
	Date(derniereModif);
	var jour = dateModif.getDate();
	var mois=dateModif.getMonth();
	var annee=dateModif.getFullYear();
	var
	heures=dateModif.getHours();
	var
	minutes=dateModif.getMinutes();

	document.write(" : ");
	document.write(jour+"/"+mois+"/"+ annee +" ?? "+ heures +":"+minutes);

</SCRIPT>
	</b></a>
		</h2>

		</div>
</div>


<div id="print-btn2"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>
<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print2")
html2pdf(element);

};
</script>
</b>

<hr>
<footer>
<?php
	include('footer.php');
?>
</footer>

<script src="../../../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>
