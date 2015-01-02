<?php
$racine = "/var/www/localhost/tan";
include("$racine/include/general.php");
$cssfiles[] = '';
gentop('Cahier des charges de Papyrus','container');
?>

	<section id="title"><h1>Cahier des charges de <strong>Papyrus</strong></h1></section>

	<section>
	<h1>À propos du <abbr title="Papyrus">PAP</abbr></h1>

	<p>
	Le PAP ou <em>Papyrus</em> est un format de fichier informatique servant à ordonner, de manière structurée et sémantique, tout type de texte de quelque discipline que ce soit, des textes littéraires aux publications scientifiques et de manière générale, ainsi que tout type de texte comportant des éléments para-textuels à ordonner sémantiquement, ou un chapitrage intra-textuel.
	</p>
	
	<div class="alert alert-info">
	<h1>Convention terminologique</h1>
	Dans la suite <span class="autology">Papyrus</span> (avec une majuscule) désignera le format Papyrus lui même alors que <span class="autology">papyrus</span> (pouvant être précédé d’un article défini ou indéfini, sans majuscule sauf contrainte grammaticale [début de phrase]) désignera un fichier particulier au format Papyrus.
	</div>
	
	<p>
	Le but du PAP est donc de séparer le fond de la forme mais surtout à rendre le fond plus sémantique, plus malléable et plus décritable.</br>
	Le format Papyrus se focalise donc sur l’aspect sémantique d’un texte aux éléments complexes et à l’identification de ces différents éléments, appelés <q>champs</q>.<br />
	Un champ est une unité isolable et, surtout, parfaitement identifiable sémantiquement par le format PAP pouvant être aussi bien du texte brut (généralement un passage de texte, un titre, une information) qu’un fichier binaire joint. Ainsi le PAP saurait reconnaître le corps de texte d’un chapitre, du titre du chapitre et du numéro de position du chapitre, par exemple.
	</p>

	<p>
	Selon les besoins, deux champs différents peuvent très bien se superposer ou s’imbriquer de même qu’un élément peut appartenir à deux champs distincts, par exemple un passage peut faire l’objet d’un <a href="https://fr.wiktionary.org/wiki/addendum#Nom_commun"><i lang="lat">addendum</i></a> et donc appartenir à un champ en tant que tel et en même temps appartenir à un champ de chapitrage.
	</p>

	<p>
	Un champ dit <q>complexe</q> peut contenir plusieurs champs subalternes ou <q>sous-champs</q>. Il s’agit d’entrées dépendantes du champ principal (comme par exemple une <q>branche</q> de second <q>niveau</q> est un <q>sous-champ</q> d’une branche de premier niveau). Un sous-champ ne peut donc pas être extérieur aux <q>champs pères</q> ce qui ne doit pas être confondu avec une simple imbrication de champs libres contenus entre les bornes d’un autre champ. Un fichier PAP peut être vu comme un super-champ complexe contenant tous les sous-champs.<br />
	<i lang="lat">A contrario</i>, un <q>champ simple</q>, ne contient pas de sous champs mais juste du texte brut où une pièce jointe. Il est donc facilement compréhensible que toutes les imbrications de champs complexes débouchent forcément sur un champ simple, finalement les champs complexes ne servent qu’à organiser la structure shémique des champs simples, ils en sont en quelque sorte la matrice.<br />
	Parmi les fichiers joints dans un champ simple, (typiquement cela pourrait être une image en vue d’illustration, mais tout type d’audio-vidéo-gramme ou de fichier informatique joint), sont distingués les <q>champs intra-textuels</q> qui peuvent illustrer et être insérés au millieu du texte, comme les images des <q>champs extra-textuels</q> qui ne sont que des pièces jointes dont le type permet une intra-textualisation mais dont l’auteur préfère y renvoyer depuis le texte par voie d’un identifiant uniforme de ressource interne.
	</p>
	
	<p>
	L’identification des champs est le fondement du fonctionnement du PAP. Les champs du PAP n’étant rien d’autre que l’organisation  la plus exhaustive possible des principaux usages scripturaux dans toutes les disciplines possibles.<br />
	
	À côté des champs figure la fonctionnalité de <q>pavillonnage</p> qui consiste à accorder à un caractère, un groupe de caractère, un mot ou un passage donné une information, comme par exemple une note de bas de page ou à dire que ce passage a fait l’objet d’une modification. Les pavillons complètent et assistent les champs dans l’identification des différents élément scripturaux. De plus, chaque type de pavillon apporte un lot d'options pouvant être vus comme des sous-champs de pavillon.
	</p>
	
	
	<p>
	Le PAP ne gère pas de mise en page, chaque élément ou <q>champ</q> ne pouvant comporter que du texte brut, ou un élément audio-vidéo-graphique, mais dans ce cas, ce dernier ne sera alors qu’une illustration ou une pièce jointe para-textuelle. Cependant une mise en page peut être affecté à tout fichier Papyrus, à l’aide d’une unique feuille de style qui traitera de manière automatisée les champs et les pavillons du PAP. De plus, les champs du PAP sont prévus pour intéragir avec les feuilles de style. En outre, un ou plusieurs exemples de mise en page peuvent être joint à tout fichier Papyrus dans un champ spécial mais il s’agit plus d’une indication éditoriale, en effet, elle peut indiquer la linéarité propre à une édition très répandue de l’ouvrage ce qui permet de maintenir une inter-opérabilité lors de l’identification d’un passage par son numéro de ligne par exemple.
	</p>
	
	<p>
	Quant à la mise en œuvre technique, le PAP se veut inter-opérable, il pourra aussi bien être lu avec un logiciel spécial qui identifiera le chapitrage et les différents éléments d’apparat savant, pour les organiser de la manière que l’utilisateur aura décidé dans ses réglages comme étant la plus aisée à son gout où encore sur une liseuse avec un système embarqué adapté. Pour l’impression, il y aura besoin d’une <q><a href="https://fr.wikipedia.org/wiki/Feuille_de_style">feuille de style</a></q> qui, combinée avec un fichier PAP dans un programme spécialisé, donnera lieu à un langage de description de pages pouvant être imprimé par la suite (par exemple PDF ou postscript). Le fait est que la feuille de style contient des informations de mise en page pouvant êtres conditionnées, par exemple, la police et la taille ainsi que la position et la page d’apparition du champ <q>Titre de l’œuvre</q> par exemple, la feuille de style pourra placer des occurences de <q>Titre de l’œuvre</q> dans tous les en-têtes ou bas de page ou encore mettre dans un formatage particulier les éléments pavillonés en tant que néologisme.
	</p>
	
	
	<p>
	Dans la suite, on s’attachera à décrire le fonctionnement du PAP avec la déscription des principaux champs et pavillons prévus.
	</p>
	
	
	
	
	
	
	<h1>Le chapitrage</h1>
	
	<h2>Les niveaux</h2>
	<p>
	Le PAP gère un plan d’une infinité théorique de niveaux de chapitrages, afin de répondre aux besoins de tous les ouvrages.<br />
	Chaque niveau est identifié par un numérateur, allant de 1 pour le niveau le plus élevé, à l’infini pour les niveaux les plus intrusifs même si dans la patique, très rares sont les ouvrages qui nécessiteront un chapitrage allant au-delà du 7<sup>ème</sup> niveau. À ce titre, le niveau initial est le nulième.
	</p>
	
	<p>
	Le nombre de niveaux requis est identifié par champ unique.
	et
	Un niveau particlulier est identifié par son numérateur
	</p>
	
	<h3>Les labels</h3>
	<p>
	Chaque niveau peut prendre un <em>label</em>, (par exemple <q>Chapitre</q>, <q>Tome</q>, <q>Livre</q>, <q>Point</q>, <q>Article</q>, <q>Exercice</q>) qui se répercutera dans chaque élément d’un même niveau (<q>Chapitre 1</q>, <q>chapitre 2</q> etc). Une bonne pratique consiste à ce qu’un label identifie donc un niveau unique ; autrement dit, un label corespond à un niveau donné.
	</p>
	
	<p>
	À des fins de mise en page via les feuilles de style, il pourra être précisé dans un champ spécial si le label est un mot féminin ou masculin, par exemple pour que la feuille de style sache choisir quel genre à faire apparaître entre les mentions <q>Article premier</q> et <q>article première</q> ou <q>Première partie</q> et <q>Premier partie</q>.
	</p>
	
	<p>
	La spécification du label est optionnelle.
	</p>
	
	
	<h2>Les branches</h2>
	<p>
	L’unité d’un niveau est une <em>branche</em>. Plusieurs branches partagent un même niveau (<q>Chapitre 1</q>, <q>Chapitre 2</q>, <q>Chapitre 3</q>, etc sont les différentes branches du niveau labélisées en tant que <q>Chapitre</q>). Chacune de ces "branches" dispose d’un "numéro d’ordre" qui contrôle leur ordre et qui est donc unique à chaque partie d’un même niveau. À ce titre, l’ensemble de l’ouvrage est le "tronc" aussi identifié en tant que "niveau" O.
	</p>
	
	<p>
	Une branche X est directement et absolument identifiable par un "ID" donné par une suite de "numéro d’ordre" de toutes les différentes branches supérieures auquelles apartient la branche X, ces "numéros d’ordre" étant classés dans l’ordre de la branche la plus élevée à la plus basse. exemple :
	<pre>
⟨<var>numéro d’ordre de la branche de niveau 1</var>⟩.⟨<var>numéro d’ordre de la branche de niveau 2</var>⟩.⟨<var>numéro d’ordre de la branche de niveau X</var>⟩</pre>
	</p>
	
	<p>
	l’enssemble des sous-branche de même niveau et subalternes à une même branche de niveau supérieur est appelé "branchage".
	</p>
	
	<p>
	Deux branches de même niveau ne peuvent avoir de passage(s) en commun.<br />
	Le contenu de chaque branche est contenu dans un sous-champ du champ principal <em>tronc</em>, autant de branches que possible peuvent être créées.
	</p>
	
	<h3>Les options primaires des branches</h3>
	<p>
	Pour chaque branche, il est possible de définir deux options primaires dans des champs spécifiques, si besoin de l’auteur, seul le titre est obligatoire pour la branche <q>tronc</q>, elles se distinguent des options secondaires dans le sens où elles ont une signification de nomination particulière.
	</p>
	
	<h4>Les titres</h4>
	<p>
	En plus du numéro d’ordre unique, chaque branche peut être affectée d’un titre dans un sous-champ de la branche, à savoir une mention qui l’identifie (par exemple <q>Tome 2 — L’apparition des reptiliens</q>, <q>L’apparition des reptiliens</q> est le titre de la 2<sup>ème</sup> partie du niveau ayant pour label "Tome"). Le "titre" n’est pas à confondre avec le "label" : le premier sert à identifier une branche particulière d’un niveau qui en compte plusieurs, tandis que le "label" sert à identifier l’ensemble d’un niveau.
	</p>
	
	<p>
	Le titre est optionnel pour tout type de branche sauf pour le "tronc".
	</p>
	
	<h4>Les sous-titres</h4>
	<p>
	En plus du titre principal, toute branche (y compris le "tronc"), pourra disposer d’autant de "sous-titre" que nécessaire en tant que sous-champ d’un sous-champ de la branche. (Le premier englobe la liste des sous-titre, le second les sous-titre même).<br />
	Un "sous-titre" est titre secondaire destiné à préciser le sujet traité. Typiquement, le titre et le sous-titre sont séparés par le signe de ponctuation deux-points ou par la "conjonction du sous-titre" « ou » mais aussi par d’autre conjonctions, de manière générale, celle ci devra être précisé en tant que sous-champ du sous-titre.
	</p>
	
	
	<h3>Les options secondaires</h3>
	<p>
	Il est possible de définir les options secondaires à toute "branche" que l’on veut pour toute branche de tout niveau, elles peuvent toutes cohabiter entre elles sauf contre-indication. Ce sont donc des sous-champs de la branche.
	</p>
	
	<h4>Les épigraphes</h4>
	<p>
	À chaque branche est affecté un champ "épigraphe" qui, souvent dans les textes littéraires, est une phrase en prose ou en vers placée en tête d’un livre, d’un ouvrage ou d’un chapitre, pour en annoncer ou résumer le contenu, ou pour éclairer sur les intentions de l’auteur.<br />
	L’épigraphe supporte des options primairse comme pour la branche.
	</p>
	
	<h4>Le préambule</h4>
	<p>
	Le "préambule" est un éclaircissement préliminaire plus ou moins utile, il donne un avant-goût du contenu de la "branche", en marque le caractère et la portée, ou résume les événements accomplis antérieurement au récit.<br />
	Le préambule supporte des options primairse comme pour la branche.
	</p>
	
	
	<h4>La pseudo-numérotation d’un niveau</h4>
	<p>
	Bien qu’il y ai un "titre" et une "numérotation" incrémentielle unique pour chaque "niveau", il existe une numérotation parallèle, la "pseudo-numérotation" que l’auteur peut choisir pour toutes les branches d’un niveau que pour un branchage particulier ou pour une ou des branches particulières. Ainsi, il peut définir de quelle manière avance sa numérotation en précisant une fonction mathématique sur le numéro de branche (décrémentitiel, tendant vers un nombre particulier au N-ième près, etc) ou de donner explicitement les numéros qu’il veut voir figurer pour chaque "branche". L’auteur peut même décider si la numérotation redémmare du point de départ à chaque branchage ou si elle continue au branchage suivant (il s’agit d’une numérotation transcendantale).
	</p>

	<p>
	Par exemple :
	</p>
	<blockquote>
	<ul>
	<li>
		Chapitre 1
		<ul>
			<li>article 1</li>
			<li>article 2</li>
			<li>article 3</li>
		</ul>
	</li>
	<li>
		Chapitre 2
		<ul>
			<li>article 1</li>
			<li>article 2</li>
			<li>article 3</li>
		</ul>
	</li>
	</ul>
	</blockquote>

	<p>	
	Peut être remplacé par :
	</p>
	<blockquote>
	<ul>
		<li>
		Chapitre 1
		<ul>
			<li>article 1</li>
			<li>article 2</li>
			<li>article 3</li>
		</ul>
		</li>
		<li>
		Chapitre 2
		<ul>
			<li>article 4</li>
			<li>article 5</li>
			<li>article 6</li>
		</ul>
		</li>
	</ul>
	</blockquote>
		
		Voir même par :

	<blockquote>
	<ul>
		<li>
		Chapitre 1
		<ul>
			<li>article 1</li>
			<li>article 2</li>
			<li>article 3</li>
		</ul>
		</li>
		<li>
		Chapitre 2
		<ul>
			<li>article 3.1</li>
			<li>article 3.14</li>
			<li>article 3.141</li>
		</ul>
		</li>
	(cette numérotation tends vers pi)
	</ul>
	</blockquote>
	
	
	<ul>
	<li>Si la pseudo-numérotation s’affecte à toutes les branches d’un niveau, alors il s’agit d’un sous-champ du niveau.</li>
	<li>Si la pseudo-numérotation s’applique a un branchage seulement alors elle est un champ de la branche mère du branchage.</li>
	<li>Si la pseudo-numérotation est casuelle alors est est un sous-champ de la branche concérnée</li>
	</ul>
	
	<h3>Les méta-branches</h3>
	<p>
	Afin de prévenir des éventuels besoins d’homonymie de numérotation entre des "branches" que peuvent exiger certains ouvrages, il est possible que deux branches aient le même "numéro d’ordre", avec néanmoins quelques modalités. Cette option crée en quelque sorte deux "sous-branches", ce ne sont pas des branches de niveau subalterne mais plutôt des sortes de branches jumelles qui cohabitent dans une branche spéciale, appelée "branche gemellipare".
	<p/>
	
	<p>
	La gemelliparie est donc plutôt une option bolléenne de branche standard qui, si elle est activée, ouvre des sous-champs de méta-branches. Il peut y’avoir autant méta-branche que nécessaire.
	</p>
	
	<p>
	En plus des options primaires et secondaires que conserve chaque méta-branche jumelle, le champ de la branche gemillipare a aussi les siens en tant que sous-champ. Et ce, en plus d’un champ supplémentaire activé par l’option de gémélliparie, appelé "justification". des sous-champs propres à l’homonymie s’ajoutent aussi aux méta-branches lors de l’actionnement de la gémélliparie.
	</p>
	
	<h4>L’ordonnancement</h4>
	<p>
	Devant un florilège de méta-branches jumelles qui se disputent toutes une place dans l’ordre d’apparition, un sous-champ, aussi activé avec la gemelliparie, est prévu pour que l’auteur puisse préciser l’ordre d’apparition conseillé, il s’agit du champ "Ordonnancement". Un autre sous-champ aussi est prévu concernant l’ordonnancement et peut contenir une justification de l’ordonnancement choisit. Le PAP donne le choix entre cinq modes d’ordonnancement possibles :
	</p>
	
	<dl>
		<dt>Le choix d’ordes casuels</dt>
		<dd>
		Ce mode donne à l’auteur de formuler plusieurs ordres possibles de lecture, chaque ordre étant spécialisé dans une situation particulière.
		L’activation de ce mode, donne lieux à un sous-champ dans lequel est listé les différents ordres possibles ainsi qu’à un champ simple où est sensé tenir un texte expliquant en fonction de quoi prendre un choix plutôt qu’un autre.
		</dd>
		
		<dt>La préférence d’ordre</dt>
		<dd>
		Bien que l’auteur ait manifesté un désir de faire apparaître à deux méta-branche le même numéro d’ordre, en choisissant l’option de gémélliparie, il est possible d’attribuer un "sous numéro d’ordre" à chaque méta-partie qui contrôle l’ordre d’apparition (selon la feuille de style, un exemple d’application serait typiquement "chapitre 1", "chapitre 1 -bis").
		</dd>
		
		<dt> La conjonction de choix <q>OU exclusif</q></dt>
		<dd>
		Il est aussi possible que l’auteur veuille que le lecteur ai à choisir certaines méta-branches à lire lorsque la lecture de toutes les méta-branches n’est pas indispensable ou que la lecture des deux homonymes n’est pas recommandée.
		Dans ce cas, l’activation de l’option du "OU exclusif" permet au lecteur savoir que seule la lecture de certains homonymes suffit.
		</dd>
		
		<dt> La conjonction de choix <q>OU inclusif</q></dt>
		<dd>
		Lorsque la lecture de toutes les méta-branches n’est pas nécessaire mais recommandée ou simplement que le fait de lire les deux homonymes n’a pas d’influence, l’auteur peut choisir l’option du "ou inclusif".
		</dd>
		
		<dt> La conjonction de choix <q>ET</q></dt>
		<dd>
		Lorsque la lecture de toutes les méta-branches est nécessaire mais que le fait de commençer par l’une ou l’autre de celles-ci en particulier n’est pas pertinent, l’auteur peut choisir l’option "OU inclusif" qui signifie au lecteur qu’il a le choix de commencer par l’homonyme qu’il veut.
		</dd>
	</dl>
		
	<h2>Le corps de texte</h2>
	<p>
	Pour distinguer le texte même des informations de chapitrage, de sémantisation et de titrage, ce dernier est placer dans le sous-champ de partie "corps de texte". Il s’agit donc du texte même et non d’un titre.
	</p>
	
	<h3>Les paragraphes</h3>
	<p>
	Il existe aussi un ultime sous-champ dans le corps de texte, à savoir, le "paragraphe", il peut y en avoir autant que nécessaire dans un corps de texte. Chaque passage paragraphé peut contenir autant de lignes que nécessaire et même des sauts de ligne.
	</p>
	
	<h2>Multiplicité des plans de chapitrage</h2>
	<p>
		Certains ouvrages présentent un chapitrage non forcément obligatoire, voire même plusieurs possibilitées de chapitrage, c’est le cas de certains receuils par exemples qui peuvent aussi bien être organisés par date d’apparition, que par théme que par tout autre critère. Plus d’un chapitrage peut, donc être conseillé par l’auteur et être tous listés dans PAP, affin que le lécteur puisse passer de l’un à l’autre. L’auteur aura Cependant l’obligation de choisir un chapitrage principal et d’agencer les autre chapitrage selon un ordre numérique et peut même donner un titre à chaque chapitrage, et un texte de présentation du chapitrage.
	</p>
	<p>
		En clair, les différents chapitrages sont complètement indépendants les uns des autres, et tous supportent les mêmes fonctionnalités de chapitrage.</br>
		En revanche, il existe une unité atomique qui ne peut être divisée, dans aucun plan : le "verset", l’auteur, si besoin peut définir chaque verset ainsi que les només et les pseudo-numérotés. <!-- What ? « les només » -->
	</p>
	<p>
	En plus de cela, il y a un champ spécifique pour décrire au lecteur la raison de chaque chapitrage et éventuellement, lequel choisir pour sa lecture.
	</p>
	
	
	
	<h1>Les pavillons du corps de texte</h1>
	<p>
	Comme il existe différents usages scripturaux, pour chaque métier et technique, les manières les plus répandues ont été retenues, et sont décrites ci-dessous. Les pavillons sont différents des "citations", c'est-à-dire qu’un élément de corps de texte battant un pavillon ne doit être qu’un formatage différent *passager*. Contrairement aux "citations" qui, aussi peuvent être courtes et fonctionnent, à un détail prét comme les pavillons, mais en diffèrent dans le sens où les pavillons doivent concerner des mots contenus dans l’économie globale d’une phrase, tandis que les "citations" peuvent donner lieux à des exemples, allant de la phrase, au paragraphe.<br />
	
	En définitive, un texte pavilloné est plus un texte comme tout autre texte, c’est donc juste un passage à sens spécial.</br>
	
	Tout caractère d’un texte brut peut être concerné par une option de corps de texte.
	</p>
	
	<dl>
		<dt>Le dialogue</dt>
			<dd>
			Un niveau particulier, pour les textes sous forme de dialogue (pièce de theatre, historique de clavardage, correspondance) est envisagé avec la possibilité de préciser la date (avec une précision allant à la milliseconde), dans tous les formats de calendiers connus (Calendrier Julien, Grégorien, Russe, Islamique, Républicain, Maya etc) et même dans un calendrier imaginaire dont les spécificités devront alors être précisées dans un champ dédié et le lieu d’émission, le(s) destinataire(s), la formule de politesse, la formule de fin de chaque répartie dans un sous-champ spécifique, avec trois options dont une et une seule doit être obligatoirement choisie :
			
			<ul>
			<li>Le dialogue instantané avec longues réparties</li>
			<li>Le dialogue instantané avec courtes réparties</li>
			<li>Le dialogue différé et épistolaire.</li>
			</ul>
			<dl>
			<dt>Didascalie</dt>
			<dd>
			</dd>
			</dl>

			<dl>
				<dt>Rétro-modification</dt>
				<dd>Il s’agit là d’une figure de style particulière consistant en ce qu’un interlocuteur ou correspondant puisse modifier ses interventions dans le passé.</dd>
			</dl>
		</dd>
		
		<dt>La versifications (littérature)</dt>
		<dd>
			En littérature, la forme particulière d’écriture en vers est souvent utilisé. Dans le PAP il s’agit d’une option de texte brut. En claire il n’existe pas un mode "prose" et un "vers" en PAP, La prose est la norme et la versification une option. De plus il peut être précisé en option de la versification si le texte suit les lois de la métrique.
		</dd>
		
		<dt>Le solfège (musique)</dt>
		<dd>
			Un mode "solfège" existe et la partition doit s’écrire dans le code de lylipond. Cependant deux sous mode existe, l’un pour préciser s’il s’agit du solfège européen ou du Jianpu, en vigeur dans le monde chinois.</br>
			Le passage battant pavillon solfégique pourra être joint en sous-champ d’un enregistrement des notes jouées.
		</dd>
		
		<dt>Les codes source (informatique)</dt>
		<dd>
			Les codes source des programmes informatiques seront identifiés, et si le code source est celui d’un langage reconnu, il suffira de préciser le nom du langage. Pour les langages éxotiques, peu répandus ou récents, il sera possible de définir les spécificités de ce langage.<br />
			Pour les passages battant le pavillon du code source de programmation non-scriptale, il est possible de joindre en option un binaire compilé en précisant le nom et le numéro du noyau avec un compilateur avec lequel il a été compilé. Il est donc possible de joindre autant de binaires que de noyaux pour lesquels ils ont étés compilés. Idem pour *tex dont il est possible de joindre une vue du rendu.<br />
			Pour les langage webs tel que HTML, il est possible de choisir, si par défaut doit être affiché le code où le rendu intérprété par un moteur de rendu. Le choix est pertinent car un lecteur de PAP peut proposer au lecteur de montrer le rendu d’un passage de code HTML.<br /> <!-- C'est un peu bancal, c'est le rôle du reader de choisir quoi afficher non ? Logiquement, PAP doit s'occuper uniquement du fond --> 
			Enfin pour les scripts de langages interprétés, il est possible de joindre une simulation de l’execution.
		</dd>
		
		
		<dt>Les identifiants uniformes de ressources (Informatique)</dt>
		<dd>
			Les identifiants de ressources de l’isbn aux localisateurs uniformes de ressource (URL) sont aussi reconnus comme tel.
		</dd>
		
		<dt>Les codes d’Interpréteur de commandes (Informatique)</dt>
		<dd>
			Lorsque l’auteur veut ajouter un code d’interpréteur de commandes il ferra battre au passage concerné le pavillon adéquat, de même que pour les codes sources, il sera possible de préciser de quel type il s’agit (Bash, zsh, fish, DOS etc) et pour les interpréteurs non pris en charge, il sera possible de préciser les spécificités. Il est aussi possible de définir si une commande est à exécuter en tant que super-utilisateur ou en tant qu’utilisateur normal.
		</dd>
		
		
		<dt>Les formules mathématiques et chimiques</dt>
		<dd>
			L’insertion des formules mathématiques et chimiques est possible dans un langage similaire à celui utilisé par Latex. Pour les formules chimiques on pourra préciser le type de représentation choisi.
		</dd>
		<dd>

		<dt>La mise en abyme interne (Littérature)</dt>
		<dd>
		Pour certains besoins artistiques, l’auteur peut vouloir que certains passages de son ouvrage se retrouvent à devenir des passages d’autres ouvrages cités dans le principal.
		<dd>
		
		<dt>La sténographie (écriture)</dt>
		<dd>
			Une plage en sténographie peut aussi être identifiée par le PAP.
		</dd>
		
		<dt>Métalinguistique</dt>
		<dd>
			Une forme particulière de pavillonage, réunie sous le groupe métalinguistique, permet de repérer certaines plages de texte en fonction de leur sens en voici un exemple :
		
		<dl>
			<dt>Débat ouvert</dt>
			<dd>
				Les passages pour lesquels le débat est ouvert à l’heure de la rédaction de l’ouvrage peuvent être reconnus par le PAP (en particulier pour les ouvrages encyclopédiques ou scientifiques).
			</dd>
			
			<dt>Glose</dt>
			
			<dd>
				Cette série de pavillons pemet d’identifier les mots n’existant pas dans la langue principale de l’ouvrage. Elles peuvent toutes être combinées entre elles.
				En particulier les mots d’origine étrangère à la langue principale de l’ouvrage. Pour ceux-là, il est possible de préciser en sous-champ, la langue originelle de la locution, la traduction de la locution.
				
				<dl>
					<dt>Les xénismes</dt>
					<dd>
						Ce pavillon précise que c’est une locution reconnue comme étrangère par les usagers de la langue et dont la transposition "tel quel" est voulue pour évoquer la culture étrangère. (en particulier les locutions latines et anglophones).
						</dd>
						
						<dt>Les mots techniques</dt>
						<dd>
						Sont concernés les mots étrangers spécifiques à la discipline traité par l’ouvrage (l’anglais pour l’informatique ou l’italien pour la musique)
						</dd>
						
						<dt>La linguistique</dt>
						<dd>
						Le pavillon "linguistique" permet de marquer les mots d’une langue étrangère lorsque celle-ci est l’objet d’étude même de l’ouvrage.
						</dd>
						
						<dt>Technique</dt>
						<dd>
						Pour les néologismes une option "technique" permet d’identfier un néologisme non lexicalisé par la langue principale de l’ouvrage mais répandu dans le jargon d’une profession.
						</dd>
						
						<dt>Néologismes subjectif</dt>
						<dd>
						Ce pavillon marque les néologismes inventés par l’auteur avec l’ouvrage même.
						</dd>
						<dt>Acception du contexte</dt> <!-- Acception ? -->
						<dd>
						Lorsqu’un mot polysémique a un sens particulier dans le contexte dont traite l’ouvrage, il peut être pavilloné de sorte à être reconnu comme tel.
						</dd>
						
						<dt>Autre</dt>
						<dd>
						Le pavillon "autre" regroupe tout autre type de néologisme que ceux cités précédemment.
						</dd>
					</dd>
				</dl>
			</dd>
		</dl>
		
		
		
		<dt>Autonymie</dt>
		<dd>
		Est pavilloné comme autonyme un mot dont on veut désigner la substance même lorsque celui-ci est cité ou se désigne lui-même ; elle désigne /in extenso/ le discours cité d’une citation.
		
		Exemple : Le nom "voiture" est du genre féminin.
		</dd>
		
		
		<dt>Les abréviations</dt>
		<dd>
		Pour distinger les raccourcissements d’un mot ou d’un groupe de mots, représentés alors par une lettre ou un groupe de lettres issus de ce mot, il a été prévu un pavillonage d’abréviation. Une option des pavillonages d’abréviation permet d’entrer le mot abrégé en complet.
			<dl>
				<dt>Personnelles</dt>
				<dd>
				Sont dites "personnelles", les abréviations propres à l’ouvrage et devant jouir d’une présentation préalable pour pouvoir êtres comprise par le lecteur.
				</dd>
				<dt>Lettre suscrite</dt> <!-- Utilité ? Mise en page ? -->
				<dd>
				Le mot est tronqué par contraction (on ne garde que la ou les premières lettres) et la finale (ou les finales) est écrite en hauteur, dans un petit format.
				</dd>
				
				
				<dt>Troncation</dt>
				<dd>
				Pavillon servant à préciser qu’un mot est tronqué en début ou en fin et, éventuellement, terminé par la voyelle o. devra être précisé en sous-champ le mot complet. <!-- Euh, comprend pas la phrase. La voyelle o ? Pourquoi ? -->
				</dd>
				
				<dt>Réticence de plume</dt>
				<dd>
				Précise que l’abréviation est un masquage pudique des lettres d’un mot, en général ordurier, par un signe de ponctuation qui est souvent le point.
				</dd>
			</dl>
		</dd>
		
		
		
		<dt>Acronymie</dt>
		<dd>
		Sont les abréviations dont le résultat forme un mot prononcé sans l’épeler. Le pavillon d’acronymie précise donc que le mot est à lire par syllabes et non à l’épeler.
		Il devra être précisé dans des champs spéciaux les différents mots composant l’acronyme et leur initiales.
			<dl>
				<dt>Récursivité</dt>
				<dd>
				Est pavilloné comme récursif un acronyme dont une lettre renvoit à l’acronyme même, il s’agit donc d’une auto-référence dans un procédé de mise en abyme. Comme pour "Visa : Visa International Service Association." où encore "GNU : GNU’s Not UNIX" (« GNU n’est pas Unix ».). De plus, dans un sous-champ spécial pourra être précisée les raisons du choix de la lettre à l’origine de la récursivité.
				</dd>
				
				<dt>Mutualité</dt>
				<dd>
				Un acronyme mutuellement récursif est un acronyme ayant un mot étant lui même un acronyme dont un mot renvoi vers le premier acronyme. Exemple : "HURD : Hird of Unix-Replacing Daemons" et "HIRD : Hurd of Interfaces Representing Depth"
				</dd>
				
				<dt>Imbrication</dt>
				<dd>
				Un acronyme récursivement imbriqué est un acronyme dont un mot est aussi un acronyme pouvant lui même être récursivement imbriqué et ainsi de suite, il peut ne pas s’agir d’auto-référence.
				Chacun des acronyme imbriqué pouvant avoir le même pavillonage que tout autre acronyme.
				
				Exemple d’imbrivations multiples :
				
				<blockquote>
				<table>
					<tr>
						<td style="vertical-align:top;" rowspan="4">GTK : the </td>
						<td colspan="4">GIMP ToolKit.</td>
					</tr>
					<tr>
						<td style="vertical-align:top;" rowspan="3">GIMP :</td>
						<td colspan="3"> GNU Image Manipulation Program.</td>
					</tr>
					<tr>
						<td style="vertical-align:top;" rowspan="2">GNU : GNU’s Not </td>
						<td colspan="2"> UNIX.</td>
					</tr>
					<tr>
						<td>UNIX : Uniplexed Information and Computing Service</td>
					</tr>
				</table>
				</blockquote>
				
				Soit <q>GTK : the GNU’s Not Uniplexed Information and Computing Service Image Manipulation Program ToolKit</q>
				</dd>
		
				<dt>Siglaison</dt>
				<dd>
					Précise que les initiales de plusieurs plusieurs mots accolés ensemble sont à épeler.
					Il devra être précisé dans des champs spéciaux les différents mots composants l’acronyme et leurs initiales.
				</dd>
				
				<dt>Initiales</dt>
				<dd>
					Pavillon équivalent à la siglaison mais limité aux noms propres.
				</dd>
			</dl>
		</dd>
		
		
		<dt>Les citations externes</dt>
		<dd>
		Tout passage reprenant une phrase d’un autre auteur peut être précisé avec la balise de citation externe, avec un champ qui précise le nom de l’auteur dont a été reprise la citation, un champ pour l’ouvrage où elle apparut et un champ pour plus de précision sur la partie exacte de la partition. Il peut, de plus, être précisé en option,si le fait que ce soit une citation est compréhensible d’après le contexte, ou si le nom de l’auteur originel n’est précisé nulle-part ailleurs qu’en option de pavillon.
		</dd>
		
		<dt>Exergue (typographie)</dt>
		<dd>
		Lorsque l’auteur veut indiquer à la feuille de style que certains passages de son texte peuvent êtres mis en exergues car porteurs d’une information décisive, il peut les pavillonnée en "exergue". Avec les options il peut choisir si la citation doit apparaître, avant son emplacement dans le texte ou aprés, et le cas échéant à quelle distance (les distances se comptant en "écran"/"page"/"vue").
		</dd>

		<dt>Licence (droit)</dt>
		<dd>
		Il est possible de préciser que la licence d’un passage est différente de celle du reste du texte. Il est possible de préciser autant le nom de la licence, que l’auteur de ce passage et le texte complet de la licence ainsi qu’un substantif.

			<dl>
				<dt>Source et crédits</dt>
				<dd>
				Définit l’auteur du passage.
				</dd>
				<dt>Non-authentifié</dt>
				<dd>
				Pour les passage non-authentifiés.
				</dd>
			</dl>
		</dd>

		<dt>Liaison</dt>
		<dd>Permet de relier deux parties non contigües entre elles.</dd>

		<dt>Marque</dt>
		<dd>Permet de marquer un objet d’une certaine façon. Par exemple, dans les ouvrages de grammaires, permet de marquer la fonction d’un mot dans une phrase.</dd>

		<dt>Avertissement de contenu</dt>
		<dd>
		Averti le lecteur que le dévoilement d’un passage ne lui est préférable que sous certaines conditions.

			<dl>
				<dt>Sensibilité (sexualité, violence)</dt>
				<dd>
				</dd>

				<dt>Dévoilement d’intrigue (<a href="https://fr.wikipedia.org/wiki/Spoiler">divulgâchi</a>)</dt>
				<dd>
				Utile dans les papyrus traitants d’une autre œuvre. Dans l’argument d’une pièce ou le synopsis d’un film dont le lecteur ne désirerait pas avoir connaissance avant d’avoir joui de cette œuvre.
				</dd>

				<dt>Divulgâchi interne<dt>
				<dd>
				Idem que plus haut sauf qu’il s’agit de marquer (dans le paratexte par exemple) les passages dévoilant l’intrigue mise en scène dans le papyrus même.
				</dd>
			</dl>

		</dd>
		<dt>Note</dt>
		<dd>
		Non, il ne s’agit pas de notes de bas de page ! (mais c’en est analogue)<br /> <!-- c'en est analogue ?-->
		Le Papyrus n’intégrant pas la mise en page, il ne précise pas comment mettre en forme les notes mais se contente de préciser que l’auteur souhaite apporter un éclairage sur un passage donné.

			<dl>
				<dt>Scholie</dt>
				<dd>
				</dd>
			</dl>

			<dl>
				<dt>Note de référence</dt>
				<dd>
				Permet d’étayer un propos.
				</dd>
			</dl>
		</dd>

		<dt>Origine paléographique</dt>
		<dd>
		Il se peut que, compte tenu des fonctionalités sémantiques formelles présentées par Papyrus, certaines notations d’origine (d’ouvrages apparus avant la mise au point du format Papyrus) deviennent obsolètes car redondantes avec le traitement formel de Papyrus (Par exemple, l’avertissement de contenu qui n’a plus lieux d’être mentionné en toute lettres car traité par la fonctionnalité adequate). Toutes fois, pour préserver une trace du contenu original de l’auteur initial, un champ est prévu.
		</dd>

		<dt>Exercice (pédagogie)</dt>
		<dd>
		Lorsqu’un ouvrage pédagogique propose au lecteur une évaluation auto-corrective, les réponses sont cachées. Sinon, Elles sont simplement abscentes.<br />
		Il est aussi possible d’associer un nombre de point à chaque question.
		</dd>

		<dt>Surprise</dt>
		<dd>
		Il arrive que l’auteur veuille préserver un effet afin qu’il apparaisse subitement au lecteur. Dans le cas d’un livre en papier, celà forcera les feuille de style à placer le passage surprenant en début de page.
		</dd>
	</dl>
	
	
	
	<h2>Éditions et versionnement</h2>
	<p>
	Lorsque plusieurs versions d’un même ouvrage existent, un seul papyrus peut les contenir. Les différentes versions, qui chacune peuvent avoir tous les types de méta-données para-textuelles propres que le papyrus même, sont définies en en-tête. Ensuite, deux choix s’offrent à l’auteur.<br />
	Soit les versions ne diffèrent entre elles que pour certains passages dans ce cas seuls ces passages feront l’objet d’une précision par des champs spéciaux.<br />
	Soit les deux œuvres sont très différentes et il est nécessaire que tout le contenu de chaque œuvre soit à part.
	</p>

	<p>
	En outre, les raisons ayant motivé la divergence peuvent être précisées :
	</p>

	<dl>
		<dt>Versions circonstantielles</dt>
		<dd>
		Désir de faire des versions spécifiques à des régions, des communautés culturelles, certains types de personnes identifiées par leur genre, la tranche d’âge ou la profession.
		</dd>

		<dt>Censure</dt>
		<dd>
		Lorsqu’une entité répressive (autorités, groupes criminels, etc) empèche la publication d’un passage.
		</dd>

		<dt>Auto-censure</dt>
		<dd>
		Cas particulier de la censure où l’auteur, sachant d’office la réaction de l’entité répressive, renonce à publier un passage.
		</dd>

		<dt>Addenda</dt>
		<dd>
		Amélioration post-publicatoire.
		</dd>

		<dt>Annulation</dt>
		<dd>
		Lorsqu’une annulation de modification s’oppère, les traces de cette modification ne sont pas suprimées mais marquées comme caduques afin de maintenir une traçabilité des différentes versions.
		</dd>
	<dl>

	<p>
	Évidemment, un champ permet à l’auteur de s’exprimer sur les raisons de la publication d’une édition différente dans son ensemble ou de justifier chaque passage.
	</p>

	<h3>Pagination</h3>
	<p>
	Chaque version peut être accompagnée de ses propres balises de pagination. Celà est particulièrement utile lorsque, pour un ouvrage donnée, une édition fut tellement importante qu’elle devint une référence. L’exemple typique est celui de la <a href="https://fr.wikipedia.org/wiki/Pagination_de_Stephanus">Pagination de Stephanus</a>.<br />
	Ainsi, plusieurs paginations peuvent cohabiter dans un même papyrus.
	</p>

	
	<h2>Les précisions de type paléographique</h2>
	Ces précisions cherchent à montrer un changement entre une ancienne graphie d’un mot utilisé.
	
	<dl>
		<dt>Les abréviations médiévales</dt>
		<dd>
			Le Moyen-Âge ayant usé d’un florilège d’abréviation, leur pavillonage est rendu possible pour la rétro-compatibilité paléographique. Ansi les abréviations médiévales se déclinent.
			
			<dl>
				<dt>La contraction</dt>
				<dd>
					Une ou plusieurs lettres d’un mot sont omises mais la première et la dernière sont conservées.
				</dd>
				
				<dt>La suspension</dt>
				<dd>
					La finale (une ou plusieurs lettres) d’un mot (ou d’une syllabe) est omise.
				</dd>
				
				<dt>Les logogrammes et symboles divers</dt>
				<dd>
					Des mots ou des syllabes entières peuvent être remplacés par un signe unique, que ce soient des ligatures (cf. esperluette) ou des lettres modifiées (barrées, surmontées de symboles, du titulus et autres signes). Ce symbole devra alors être joint en tant qu’image.
					Les notes tironiennes, par exemple, ont fourni un grand nombre d’abbréviations de ce type, qui abondent surtout dans les manuscrits de droit . <!-- notes tironniennes ? turonniennes * ? -->
				</dd>
				
				<dt>La substitution du <span class="autology">-us</span> (ou autre) par un <span class="autology">-x</span> ou <span class="autology">-<sup>9</sup></span> (ou autre)</dt>
				<dd>
					Comme la substitution du -us par le -x ou par un un-9 en exposant était une pratique courante dans de nombreux manuscrits, Le PAP la reprend avec la possibilité de préciser le substitué et le substituant.
				</dd>
				
				<dt>Lettre suscrite</dt>
				<dd>
					Le mot est tronqué par contraction (on ne garde que la ou les premières lettres) et la finale (ou les finales) est écrite en hauteur, dans un petit format. <!-- Sensation de déjà vu... dans les abbréviations -->
				</dd>
			</dl>
		</dd>
	</dl>
	
	
	
	
	<h1>Bibliographie</h1>
	
	
	<h1>Paratexte</h1>
	<p>
	Outre le texte même, est souvent joint à un ouvrage différents textes ou éléments périfériques.
	</p>
	<p>
	Que se soit un préambule, un avant-propos, une notice, un avis au lecteur, une préface, une postface, une avertissement, une introduction, des discours préliminaires, un épilogue, une/des lettre(s) ouverte(s), et autre éléments préambulatoire de l’auteur/traducteur/éditeur et texte de tête des différents éditeurs/auteurs/traducteurs, post-scriptum. Mais aussi des informations compte à la propriété intellectuelle, le nom, la description de la licence, le nom de ou des auteurs/éditeurs/traducteurs, la date de parution, le destinataire du document, les différentes éditions/représentations, ainsi que les crédits et le résumé des crédits, mes aussi les annexes, les appendices, les dossiers joints, l’ISBN/ISSN, la discipline/domaine/mouvement auxquels appartient l’ouvrage, le genre, la classification selon deleway <!--deleway ?-->, selon le système décimal et/ou selon un autre système dont le nom sera précisé, une citation préambulatoire, le dépot légal, l’édition, la date d’édition, information sur l’édition, ainsi que la manière dont à été édité l’ouvrage, la bibliothèque distribuant l’ouvrage, des information sur l’édition en PAP, le frontispice, les dédicaces, le résumé de l’œuvre, le résumé de quatrième de couverture etc.</p>
	Ces éléments sont extérieurs au texte même, ils le présentent, le précisent. Un champ est prévu pour chaque élément péri-textuel. Tous ces éléments ne sont pas toujours utilisés en même temps par un ouvrage donné dans ce cas là.
	</p>
	
	<h2>Les informations sur l’auteur</h2>
	
	<h3>L’auteur</h3>
	<p>
	La raison du PAP est de proposer un fichier unique pour chaque ouvrage, dans ce fichier seront réunis en définitive toutes les versions et toutes les informations connues de l’œuvre. Une biographie de l’auteur par exemple n’a pas sa place dans le PAP car elle peut être variable, de plus elle concerne plus l’auteur que l’œuvre même alors que le fait de connaître le nom de l’auteur suffirait pour pouvoir en retrouver une biographie, idem pour une adresse de jonction de l’auteur, d’autant que cette dernière peut être vraiment très variable au cour du temps, voire inutile après la mort de l’auteur. Néanmoins, pour un minimum d’indépendance, il est tout de même possible d’intégrer certaines de ces informations dans le champ complexe des information variable, le fait de placer ces information dans ce champ informe de leur extrême variabilité et du fait qu’il ne sont donnés qu’à titre indicatif.<br />
	Comme ces informations varient, leur différentes versions connues à un moment donné, restent enregistrée dans le PAP pour des raisons de philologie, avec en sous-champ la date d’abondon.
	</p>

	<p>
	Les informations sur l’auteur seront traitées selon les normes du projet connexe <a href="/ordinator/gprojets/#fCard">fCard</a>.
	</p>
	
	
	<h2>Multiplicité d’auteurs</h2>
	<p>
	Lorsqu’il y a plusieurs personnes à avoir apporter leur travail à l’ouvrage chacune doit être citée avec le droit aux mêmes champs comme cité plus haut.<br />
	Et comme il est forcément besoin de classer les auteurs il existe des groupes, les auteurs pricipaux, les post-contributeurs, les commentateurs, les correcteurs sémiques, les correcteurs linguistiques, les traducteurs, et puis les éditeurs.
	</p>
	
	<p>
	Dans chaque groupe seront hiérarchisé les auteurs par importance, d’abord l’ordre chronologique qui fera apparaître en premier, l’initiateur, celui qui a amorcer le projet de l’ouvrage, ou sinon la première personne, dans l’ordre chronologique à avoir collaborée à l’ouvrage en tant que membre d’un groupe.<br />
	Si des auteurs ont initié en même temps le projet de l’ouvrage alors le classement fera figurer en premier lieu les auteurs qui sont restés le plus longtemps au sein du projet (cas assez rare).<br />
	En cas d’égalité entre un où plusieurs auteurs, ce sera le point de vue, dans le cas où l’ouvrage soit écrit majoritairement sous le point de vue d’un auteur particulier (cas assez rare).<br />
	Sinon, ce sera l’ordre d’apparition dans le texte, par exemple, pour un récit épistolaire ce sera l’auteur qui est à l’origine du premier message sauf si le sujet de l’ouvrage porte essentiellement sur un autre auteur.<br />
	Si malgré tout les auteurs restent à égalité jusque-là, alors la parole sera à l’ordre alphabétique.
	</p>
	
	<p>
	L’entrée de chaque auteur comportera les champs décrits dans ==Les informations sur l’auteur==.
	</p>
	
	<h2>Péritexte</h2>
	<p>
	Il s’agit des éllement para-textuels qui éscortent l’œuvre et en précisent le sens. Tous les péritextes, bien que reconnus en tant que champ particulier (par exemple, en tant que préambule/avant-propos/etc) Peuvent porter un intitulé différent du nom de leur champ (par exemple "Avant-proposs" pour la préface).
	</p>
	
	<p>
	À tous les péritextes sont joints le nom de l’auteur particulier de ce péritexte, la date de rédaction du péritexte, la langue de publication, l’occasion de la publication, la raison de la rédaction de ce péritexte, le lieux de publication et la date de publication. Avec cela il est en plus possible de faire des nominations selon les mentions cochée par l’auteur/éditeur (par exemple, "préface de l’édition belge en néérlandais de l’année X par Monsieur Y").
	</p>
	
	<h3>Les Péritextes primaires</h3>
	<p>
	Sont regroupés sous cette dénomination, l’ensemble des péritexte de qualité érudie, il peut y’en avoir, en sous champ autant que nécessaire et tous supportent toutes les fonctionnalités de chapitrage et de pavillonage et les les précisions de type paléographique.
	</p>
	
	<dd>
		<dt>La préface</dt>
		<dd>
		Une préface un texte d’introduction et de présentation. Placé en tête d’un livre, il en fait connaître les vues, le plan, prévient des objections ou répond à des critiques.<br />
		Dans la préface l’auteur explique certains choix et se défends de certaines critiques.
		</dd>
		
		<dt>Le préambule</dt>
		<dd>
		Le préambule est un éclaircissement préliminaire plus ou moins utile, il donne un avant-goût de l’ouvrage, en marque le caractère et la portée, ou résume les événements accomplis antérieurement au récit.<br />
		Un préambule fait donc plutôt partie du corps même du corps du texte principal que des élément d’excorte mais il reviendra toutefois à la feuille de style d’en définir la position lors de l’impression.
		</dd>
		
		<dt>La notice</dt>
		<dd>
		En réalité, les éléments présent dans la notice jouissent de champs a part entière dans le PAP, La notice ne peut donc que contenir un texte précisant comment trouver le texte dans une bibliothéque
		</dd>
		
		<dt>L’avis au lecteur</dt>
		<dd>
		L’avis au lecteur est un élément du paratexte d’un ouvrage placé par l’auteur ou l’éditeur au début de celui-ci afin de fournir au lecteur des informations jugées nécessaires pour la compréhension ou surtout l’acceptation de l’œuvre. Il peut s’agir d’un avertissement concernant le caractère choquant de la suite d’un roman ou encore signalant l’intention de l’écrivain afin qu’elle ne soit pas mal interprétée si elle risque de l’être.
		</dd>
		
		<dt>La postface</dt>
		<dd>
		Joue le même rôle que la préface à savoir que c’est un texte d’avertissement ou de commentaire placé à la fin d’un ouvrage, rédigé par l’auteur ou par une autre personne. Évidemment, la position de l’élément relève du formatage mais la préface recèle des informations d’un ordre différent de la préface.
		</dd>
		
		<dt>L’avertissement</dt>
		<dd>
		Il s’agit d’un texte préliminaire de l’ouvrage destiné à éclairer le lecteur
		</dd>

	</dd>
	
	
	
	
	
	
	
	
	
	
	
	
	
	_____________________________________________________________
	
	<h1>Travail collaboratif</h1>
	<p>
	Reprendre les marqueurs de Wikipédia sur les <a href="https://fr.wikipedia.org/wiki/Wikipédia:Contenu_évasif">passages évasifs</a> et <q><a href="https://fr.wikipedia.org/wiki/Wikipédia:Citez_vos_sources">Citez vos sources</a></q>.
	</p>
	
	<h1>Les différentes versions</h1>
	
	
	
	
	<h1>Passages spéciaux</h1>
	
	<p>
	Dans le corps de texte, certains passages réclament une identification spéciale, ces identifications sont regroupées dans ce chapitre. La différence d’avec les options de corps de texte étant que les passages spéciaux peuvent regrouper plusieurs ligne tandis qu’une option de corps est souvent un formatage spécial contenu dans une phrase normale. Dans les supports intéractifs on préférera à l’affichage "à la suite" du texte, un affichage "isolé", une partition, un code source où une équation par exemple seront affiché dans une partie de l’écran différente pour que le lecteur puisse continuer à lire le doccument tout en ayant le passage spécial sous les yeux, car souvent la suite du texte traite de ce passage. C’est encore plus vrai pour le visionnage d’un vidéograme ou pour l’écoute d’un audiograme. <!-- C'est pas le rôle du reader ça aussi ? -->
	</p>
	
	<h2>Les listes</h2>
	<p>
	Indépendemment du chapitrage principal peuvent apparaître dans le corps de texte certaines listes, parfois numérotées. Il peuvent paraître redondant mais assez souvent leur utilisation est indépandante de la hiérarchie de chapitrage, cela peut être une liste de tâches par exemple, le PAP prévois deux type de listes :
	
	</p>
	<dl>
		<dt>Liste numérotées</dt>
		<dd>
		Il s’agit de listes toutes simples, avec une infinité de sous parties que nécessaire. Chaque partie pouvant contenir plusieurs "paragraphe" dans le "corps de texte".
		</dd>
		
		<dt>Les listes à puces</dt>
		<dd>	
		Il s’agit de listes très simples ne disposant d’aucune forme de numérotation ni de hierarchie.
		</dd>
	</dl>
	
	<h2>Les insertions d’objet</h2>
	<p>	
Est reconnu par "objet" toute ressource pas forcément textuelle pourtant insérée en milieu du corps de texte (typiquement des images, des tableaux, des videos, des sons, ...).
	</p>
	<h3>Les images</h3>
	<p>
	L’insertion d’image est riche en paramètres.
	</p>
	<ul>
	<li>L’ancrage précise comment l’image doit être encrée par rapport au texte, trois mode existent : au paragraphe : le texte longe l’image de gauche et de droite ; Comme caractère : L’image est bordée par deux caractères, elle est littéralement traitée comme un caractère donc ; Unique : L’image se retrouve au milieu d’une ligne suivant un mot ; Page/écran total, l’image prends une page entière, cela peut être la N-ième (souvent première) page suivant ou précédant immédiatement un mot.</li>
	
	<li>La position en largeur, est obligatoire sauf quand l’option unique du paramètre d’ancrage est activée. La position en largeur connaît quatres possibilités : "milieu", "gauche", "droite" et "pourcentage" où la position de l’image doit être définie en pourcentage (le plus à gauche est 0% et le plus a droite 100%).</li>
	
	<li>Condition d’apparition, il existe deux manières de placer une image, l’une absolue, l’autre relative. De manière générale, une image peut n’apparaître que X.x vue/page/écran, avant ou aprés l’apparition d’un passage, il s’agit de l’apparition relative. Sinon, lorceuque l’on veut qu’une image apparaisse à un moment fixe, pour l’ancrage au paragraphe, il faudra définir le premier caractère a droite de l’image ; Idem pour l’encrage en caractère ; Pour l’encrage unique il s’agit de définir quel ligne précède l’apparition de l’image.</li>
	</ul>
	
	<h3>Les tableaux</h3>
	<p>
	Ils ont des paramètres similaires à ceux des images.
	</p>

	<h3>Les audiogrames et vidéogrammes</h3>
	<p>
	Là encore afin d’ajouter un audiograme, il est possible d’ajouter des commandes de préouverture selon l’apparition d’un texte à l’écran.
	</p>

	
	<h1>Les balises textuelles</h1>
	<p>
	Tout le texte est parsemé de précisions, certaines tenant des modifications apportées au texte au fil de son existence, compte au définitions où à l’explication de certains mots, ou encore compte au notes de traduction, à la collaboration de différents auteurs, ou des notes de bas de pages originelles.
	</p>
	<h2>Les balises de correspondance manuscrite</h2>
	<p>
Un PAP peut aussi embarquer une numérisation d’un manuscrit, un fac-similé de l’œuvre où un enregistrement phonographique de la lecture de celle-ci, dans ce cas un travail est fait sur la correspondance entre chaque caractère dans le corps de texte du PAP et son équivalent dans l’image de numérisation et/ou dans l’enregistrement phonographique.
	</p>
	<h2>Les balises de modification</h2>
	<p>	
Les balises autoriales les permettent d’indiquer tout changement apporté au texte au file du temps ainsi que la date et les personnes qui ont apporter ces modifications, la période où ces modifications on étée appliquées, ainsi que les raisons de ses modifications. Cela peut aussi être une traduction.
	</p>
<p>
	Typiquement, chaque morceau de texte est rattaché à un auteur (lorsque plusieurs auteurs ont apportés des modifications), une date de rédaction du passage, les raisons de la modification (Censure, meilleure expression, adaptation etc...), De même que les circonstances de la première modification et la forme dont elle a été annoncée (par note de bas de page, par notice etc) et, éventuellement, le texte de justiffication joint par l’auteur. Les balises de modification contiennent donc toutes les versions d’une œuvre.
</p>
	
	<h2>Les balises de traduction</h2>
<p>	
Les balises de traduction sont de deux types : les balises de correspondance de traduction et les balises de notice. Un PAP étant sensé comporter toutes les versions, même linguistiques d’un ouvrage, il existe donc plusieurs champs, ici les balises de traduction font le lien entre les phrases correspondante dans chaque version linguistique.
</p>
<p>
	Les balises de notice, compte à elles, contiennent pour champs, les justification données par le traducteur ainsi qu’un champ spécial pour l’auteur orriginel.
</p>	
	<h2>La précision du contexte</h2>
<p>
	Des balises peuvent préciser le contexte concernant un passage.
</p>
	
	<h2>La définition</h2>
	<p>	
Certains mots polysémiques peuvent avoir une signification très particulière dans l’œuvre, dans ce cas, des balises spéciales précisent.
	</p>
	
	<h1>Les variables circonstancielles</h1> 
	<p>	
Le PAP fournit aussi un certain nombre de fonctionnalités pouvant s’adapter aux situations spacio-temporelles et même éditorielles. Ainsi, selon qu’une image soit à gauche, en haut en bas ou dans une autre page qu’un revois vers celle-ci (typiquement les "ci-contre", ci-bas) ou que l’auteur veuille faire allusion à la date ou au lieu de lecture des commandes existent à cet effet.
	</p>
	<dl>
		<dt>date</dt>
		<dd>
		Cette commande permet d’insérer la date de lecture lorsequ’il s’agit d’un support intéractif s’il peut la fournir et une suite de mot, (typiquement : "au moment où vous lisez"), choisit par l’auteur pour les supports figés comme une impression sur papier. L’auteur pourra, pour les support intéractifs, choisir la précision de la date (au Nième prét), son formatage et la manière dont apparait la date, si elle doit être cariable en temps réel sous les yeux du lecteur agissant comme une montre, si elle doit être figée à la date à laquelle le lecteur a ouvert le PAP ou si elle doit être figée à la date à laquelle sa mention apparait à l’écran du lecteur.
		</dd>
	
		<dt>place</dt>
		<dd>
		Cette commande permet d’insérer le lieu où le lecteur se situe au moment de la lecture pour les supports intéractifs si le-dit support peut le fournir, et une suite de mot, (typiquement : "à l’endroit où vous êtes"), choisi par l’auteur pour les supports figés comme une impression sur papier, comme pour /date la précision (si disponible) pourra être choisie (Pays, région, collectivité, ville, cartier, adresse postalle, coordoonée polaire etc). et bénéficiera d’options analogues à /date : si elle doit être variable en fonction du déplacement (si le dispositif de lecture peut fournir une situation spatiale en temps réél) sous les yeux du lecteur agissant comme une boussole, si elle doit être figée au lieux où le lecteur a ouvert le PAP ou si elle doit être figée au lieux où sa mention apparait à l’écran du lecteur.
		</dd>
	
		<dt>name</dt>
		<dd>
		Permet d’insérer des informations sur le lecteur pour les supports intéractifs quand ceux-cis sont disponibles, encore une fois toutes les options de /name peuvent être remplacée par un substitut choisi
		</dd>
	
		<dt>periphérique</dt>
		<dd>
		Permet d’inséerer des informations sur le périphérique si celles-ci sont disponibles
		</dd>
	
		<dt>objetposition<dt>
		<dd>
		Comme un document PAP est sensé être affiché sur plusieurs types de formats, la position de certains "objets" peut varier d’une vue à l’autre, la variable /objetposition est donc substituée par la position de l’objet donné en paramètre par rapport à la mention de la variable. Cette variable reçoit néanmoins un paramètre supplémentaire qui précise si la commande à été choisie par l’auteur original qui a édité son œuvre en PAP, ou si l’auteur n’a pas édité l’œuvre en PAP mais dans un format traditionnel et que la variable /objetposition est une adaptation d’une mention brute que l’auteur aurait choisie (et qui devra être précisée dans un champ spécial).
		</dd>
	</dl>
	<p>
	Ces variables peuvent évidemment agir entre elles avec des boucles et des conditions.
	</p>
</section>
<?php
genbottom();
?>
