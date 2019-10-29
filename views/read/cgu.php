<?php
use App\Connection;
use App\Table\DefautTable;
use App\Auth;

Auth::check();

if($_SESSION['acces'] != 'read' && $_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "read/layouts/default";

?>
<h4>Conditions d&#39;utilisation du site Balades urbaines <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a></h4>
<br>
<h3>Page d’informations légales </h3>
<p>Les présentes dispositions ont pour objet de définir les conditions d’accès et d’utilisation du site <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a> géré par le Comité de quartier des Minimes. Sylvan La Rochelle est en charge du développement et de la supervision du site <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a>.<br>
En consultant le site et les informations qui y figurent, l’utilisateur accepte, sans aucune réserve, les conditions mentionnées ci-après.  
</p>
<h3>Mentions légales </h3>
<p>Le présent site est la propriété du Comité de quartier des Minimes dont le siège social est situé à l'adresse suivante :<br>
84 rue Lucile<br>
17000 La Rochelle<br>
Tel. 05.46.27.83.42<br>
Courriel : diam.minimes@gmail.com<br>
</p>
<h4>Hébergement</h4>
<p>L'hébergement est assuré par la société 02switch.<br>
Siège Social :<br>
222 Boulevard Gustave Flaubert<br>
63000 Clermont-Ferrand<br>
Tél : 0444446040<br>
</p>
<h4>Conception et développement</h4>
<p>Sylvan La Rochelle<br>
60 Rue Albert 1er<br>
17000 La Rochelle<br>
Tél. 05.46.55.14.70<br>
Courriel : contact@sylvan-larochelle.com<br>
<a href="https://www.sylvan-formations.com/">www.sylvan-larochelle.com</a><br>
</p>
<h3>Définitions : </h3>
<p>Utilisateur : Internaute utilisant ou se connectant sur le site <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a><br>
Service : Sur le site, l’utilisateur est en mesure de signaler un défaut repéré sur l’espace public à La Rochelle. L’utilisateur peut ajouter des photos, des commentaires ainsi que le lieu du défaut.<br>
Informations clients : Ensemble des données personnelles susceptibles d’être détenues par le site pour la gestion de notre compte, relation client et à des fins d’analyse.<br>
Informations personnelles : « Les informations qui permettent sous quelque forme que ce soit, de manière directe ou non, l’identification des personnes physiques auxquelles elles s’appliquent. Il s’agit de l’article 4 de la loi 78-17 du 6 janvier 1978. Les termes donnés, à caractères personnelles, personnes concernées, sous-traitant et données sensibles ont le sens défini par la protection générale des données RGPD loi 2016-679. »
</p>
<h3>Présentation générale </h3>
<p>Le site <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a> vise à améliorer la qualité de l’espace public rochelais en favorisant la synergie entre les usagers de l’espace public et les services techniques municipaux et leurs partenaires. <br>
Afin d’assurer la remontée rapide, précise, fiable d’une anomalie sur l’espace public et pour faciliter sa prise en charge par les services municipaux et leurs partenaires, il est demandé à l’usager :  <br>
• le lieu de l’anomalie <br>
• la date d’observation <br>
• les coordonnées GPS (longitude et latitude)<br>
• les Services à sélectionner dans une nomenclature fermée<br>
• l’état <br>
• une photo de l’anomalie <br>
• la nature de l’anomalie.<br>
Les usagers qui souhaitent suivre le traitement de l’anomalie qu’ils ont signalée sont invités à se connecter au site internet régulièrement depuis leur compte.<br>
Tous les usagers qui se connectent au site peuvent identifier les anomalies enregistrées. <br>
Les informations fournies par les utilisateurs doivent être considérées comme des documents de travail qui aideront le Comité de quartier des Minimes et ses partenaires à organiser leur activité. Ces informations n’engagent donc en aucune façon le Comité de quartier des Minimes et ses partenaires à prendre des mesures dans un délai donné. <br> 
Le Comité de quartier des Minimes et ses partenaires restent libres de déterminer les actions à mettre en place. <br>
L’application enregistre la date d’arrivée de l’anomalie et génère un numéro d’enregistrement. Au fur et à mesure de l’avancement du traitement, le statut est mis à jour jusqu’à la fin de l’intervention. <br>
Le Comité de quartier des Minimes peut refuser les anomalies qui n’entrent pas dans le champ de compétence municipale, en particulier celles situées dans des espaces privées. Ils peuvent également rejeter les anomalies ne relevant pas du site. Ils peuvent enfin rejeter les anomalies pour lesquelles les éléments fournis sont inexploitables : adresse erronée, incompatibilité entre adresse et photographie, photographie floue ne permettant pas de qualifier l’anomalie. <br>
Le Comité de quartier des Minimes s’efforce d'assurer une disponibilité maximale et continue du site. Toutefois, il ne pourra être tenue responsable en cas de défaillance technique ou d'indisponibilité du site, quelle qu’en soit la durée. 
</p>
<h3>Photos, commentaires et protection des données à caractère personnel </h3>
<p>Les données publiées sur le site sont fournies uniquement à titre d'information et n'ont aucun caractère légal. <br>
Le Comité de quartier des Minimes et ses partenaires déclinent toute responsabilité pour les dommages pouvant résulter de l'utilisation ou de l’interprétation des informations publiées sur le site. <br>
Le Comité de quartier des Minimes et ses partenaires ne sont pas en mesure de garantir le caractère exact et complet de ces informations et, de ce fait, ne peuvent être tenus responsables pour quelque motif que ce soit de toute erreur que contiendrait le site ou des dommages directs ou indirects que toute personne pourrait subir du fait de la consultation du site ou des informations publiées sur celui-là. <br>
En envoyant une fiche "défaut", l’utilisateur accepte que les données qu’il a communiquées puissent être publiées sur le site, sans que les responsables du traitement ne lui soient redevables d’aucune indemnité. <br>
Par l’envoi d’une fiche "défaut", l’utilisateur consent au traitement informatisé de toutes les données communiquées sur le formulaire. Ces données pourront être utilisées à des fins de communication dans le cadre du traitement du dossier. Elles ne feront en revanche pas l’objet d’un usage à caractère commercial. <br>
Le Comité de quartier des Minimes et ses partenaires s’engagent à traiter les données qui leurs sont communiquées conformément à la loi du 6 janvier 1978 dite « informatique et liberté relative à la protection de la vie privée en matière de traitement des données à caractère personnel ». <br>
Conformément à la loi susmentionnée, l’utilisateur a le droit de consulter et, si nécessaire, de faire rectifier les données en question en adressant une demande en ce sens au Comité de quartier des Minimes.<br>
Les photos et commentaires introduits par l’utilisateur sont directement affichés sur le site sans validation préalable. Le Comité de quartier des Minimes et ses partenaires ne pourront être tenus responsables du contenu des photos et des commentaires. L’utilisateur qui communique des photos déclare qu’elles sont libres de droit et garantit le Comité de quartier des Minimes et ses partenaires contre tout recours portant sur les droits attachés aux photos communiquées. <br>
Les photos et commentaires doivent respecter le droit des marques (pas de détournement de marque, pas de publicité) ainsi que la vie privée et le droit à l’image des personnes. Il est donc interdit de transmettre des photographies sur lesquelles il serait possible de reconnaître des personnes qu’elles soient seules ou en groupe, qu’il s’agisse de personnes privées ou d’agents municipaux. Il est interdit d’écrire un nom dans le champ commentaire. <br>
De même, il est interdit de transmettre des photographies d’objets qui pourraient être facilement reliés à leur propriétaire (véhicule comportant un marquage spécifique, publicitaire en particulier, ou dont le numéro minéralogique est visible). Il en est de même pour les photographies qui apportent des éléments sur leur ancien propriétaire (déchets comportant le nom et/ou l’adresse du déposant). Dans le cas où l’anomalie est indissociable de l’objet reconnaissable (graffiti sur un mur privé ou une devanture de magasin) il convient de faire de sorte que la photographie fasse un gros plan sur l’anomalie pour limiter les possibilités d’identification du bien privé. <br>
Les photographies présentes dans l’application doivent être conformes à la bienséance. Il est interdit de transmettre des photos qui seraient de nature à choquer les personnes susceptibles de les regarder.<br> 
Le Comité de quartier des Minimes se réserve le droit de supprimer des photos en raison de leur qualité technique insuffisante, de leur caractère raciste, pornographique, violent, extrémiste ou licencieux ou portant atteintes à la vie privée et/ou au droit à l’image de tiers. Le droit de suppression n’est pas réservé à quelques modérateurs mais attribué à la majorité de ceux qui ont accès à l’application afin que les photos interdites disparaissent le plus rapidement possible. <br>
Le Comité de quartier des Minimes supprimera aussi les commentaires qui présentent un caractère raciste, pornographique, violent, extrémiste ou licencieux ou qui portent atteintes à la vie privée (ex : citation d’un nom de tiers). <br>
Les photographies et les commentaires ne peuvent en aucun cas être utilisés comme éléments de preuve dans le cadre de procédures juridiques ou disciplinaires à l’encontre de tiers. En revanche, le Comité de quartier des Minimes se réserve le droit de poursuivre ou faire poursuivre tout auteur de photo ou commentaire à caractère raciste, pornographique, violent, extrémiste ou licencieux ou qui portent atteintes à la vie privée et/ou au droit à l’image de tiers.  
</p>
<h3>Gestion des données personnelles</h3>
<p>Le client est informé des réglementations concernant la communication marketing, la loi du 21 juin 2014 pour la confiance en l’économie numérique, la loi informatique et liberté modifié du 6 août 2004 modifiant la loi du 6 janvier 1971 ainsi que du règlement général sur la protection des données, règlementation européenne RGPD appliquée au droit français sous le numéro 2016-679. </p>
<h3>Responsable de la collecte des données personnelles</h3>
<p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : DIAM – Comité de Quartier des Minimes. <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a> est représenté par François Fromentin.<br>
En tant que responsable du traitement des données qu’il collecte,  <a href="http://www.baladeurbaine.diam17.fr">http://www.baladeurbaine.diam17.fr</a> s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité. Chaque fois que www.baladeurbaine.diam17.fr traite des Données Personnelles, www.baladeurbaine.diam17.fr prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles www.baladeurbaine.diam17.fr les traite.
</p>
<p>Tableau d’utilisation des données personnelles (Conformité à la loi RGPD n°2016-679)</p>
<img src="/images/UtilisationDesContenus.PNG" alt="">
<h3>Partenaires </h3>
<p>Gestionnaire du site : Le Comité de quartier des Minimes <br>
Responsable technique : SYLVAN La Rochelle<br>
Autres participants : Manon BRUIMAUD, Vanessa PAILLARD, Ludmilla BERNIER, Franck FORGEOIS, Claire FREMOUW-BOST, Nicolas COUTURIER.
</p>
<h3>Contacts</h3>
<p>En cas de difficultés lors de l’utilisation de Balade Urbaine, l’utilisateur peut contacter Le Comité de quartier des Minimes aux coordonnées suivantes: <br>
 
 <a href="https://www.larochelle.fr/annuaires/lieux/annuaire/comite-de-quartier-les-minimes">https://www.larochelle.fr/annuaires/lieux/annuaire/comite-de-quartier-les-minimes</a><br>
 
 Pour signaler un défaut, l’utilisateur devra compléter le formulaire et suivre les instructions. <br>
  
 Balade Urbaine est un site internet développé et maintenu par Sylvan La Rochelle.
 </p>
