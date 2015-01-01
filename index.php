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
	En plus du titre principal, toute branche (y compris le "tronc"), pourra disposer d’autant de "sous-titre" que nécessaire en tant que sous-champ d’un sous-champ de la branche. (Le premier englobe la liste des sous-titre, le segond les sous-titre même).<br />
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
	
	Par exemple :
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
	
	Peut être remplacé par :
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
	La gemelliparie est donc pluto une option bolléenne de branche standard qui, si elle est activée, ouvre des sous-champs de méta-branches. Il peut y’avoir autant méta-branche que nécessaire.
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
	Il existe aussi un ultime sous-champ dans le corps de texte, à savoir, le "paragraphe", il peut y en avoir autant que nécessaire dans un corps de texte. Chaque passage paragraphé peut contenir autant de lignes que nécessaire et même des sauts de ligne. En revanche, l’espace à laisser entre chaque paragraphe est défini par un autre sous-champ dédié à cet effet en pourcentage de la hauteur de la police.
	</p>
	
	<h2>Multiplicité des plans de chapitrage</h2>
	<p>
		Certains ouvrages présentent un chapitrage non forcément obligatoire, voire même plusieurs possibilitées de chapitrage, c’est le cas de certains receuils par exemples qui peuvent aussi bien être organisés par date d’apparition, que par théme que par tout autre critère. Plus d’un chapitrage peut, donc être conseillé par l’auteur et être tous listés dans PAP, affin que le lécteur puisse passer de l’un à l’autre. L’auteur aura Cependant l’obligation de choisir un chapitrage principal et d’agencer les autre chapitrage selon un ordre numérique et peut même donner un titre à chaque chapitrage, et un texte de présentation du chapitrage.
	</p>
	<p>
		En claire, les différents chapitrages sont complettement indépendants les uns des autres, et tous supportent les mêmes fonctionnalitées de chapitrage.</br>
		En revanche il existe une unité atomique qui ne peut être divisée, dans aucun plan : le "verset", l’auteur, si besoin peut définir chaque vérsset ainsi que les només et les pseudo-numérotés.
	</p>
	<p>
	En plus de cela Il y’a un champ spécifique pour décrire au lécteur la raison de chaque chapitrage et éventuellement, lequel choisir pour sa lecture.
	</p>
	
	
	
	<h1>Les pavillons du corps de texte</h1>
	<p>
	Comme il existe différents usages scripturaux, pour chaque métier et technique, les manière les plus répandues on étés retenues, et sont décrites si-dessous. Les pavillons sont différentes des "citations" à savoir qu’un élément de corps de texte battant un pavillon ne doit être qu’un formatage différent *passager*. Contrairement aux "citations" qui, aussi peuvent être courtes et fonctionne, à un détail prét comme les pavillons, mais en diffèrent dans le sens où les pavillons doivent concerner des mots contenues dans l’économie globale d’une phrase, tandisque les "citaition" peuvent donner lieux à des exemples, allant de la phrase, au paragraphe.<br />
	
	En déffinitive un texte pavilloné est plus un texte comme tout autre texte, c’est donc juste un passage à sens spécial.</br>
	
	Tout caractère d’un texte brut peut être concérné par une option de corps de texte.
	</p>
	
	<dl>
		<dt>Le dialogue</dt>
			<dd>
			Un niveau particulier, pour les textes sous forme de dialogue (piéce de theatre, historique de clavardage, correspondance) est envisagé avec la possibilité de préciser la date (avec une précision allant à la millisegonde), dans tous les formats de calendiers connus (Calendrier julien, grégorier, Russe, Islamique, Républicain, maya etc) et même dans un calendrier immaginaire dont les spécificité devront alors être précisées dans un champ dédié et le lieux d’émission, le/les déstinataires, la formule de politesse, la formule de fin de chaque répartie dans un sous-champ spécifique, avec trois options dont une et une seule doit être obligatoirement choisie :
			
			<ul>
			<li>Le dialogue instantanné avec longues réparties</li>
			<li>Le dialogue instantanné avec courtes réparties</li>
			<li>Le dialogue différé et épistolaire.</li>
			</ul>
			<dl>
			<dt>Didascalie</dt>
			<dd>
			</dd>
			</dl>
		</dd>
		
		<dt>La verssifications (litérature)</dt>
		<dd>
			En litérrature, la forme particulière d’écriture en vers est souvent utilisé. Dans le PAP il s’agit d’une option de texte brut. En claire il n’existe pas un mode "prose" et un "vers" en PAP, La prose est la norme et la versification une option. De plus il peut être précisé en option de la versification si le texte suit les loies de la métrique.
		</dd>
		
		<dt>Le solfège (musique)</dt>
		<dd>
			Un mode solplhègique existe et la partition doit s’écrire dans le code de lylipond. Cependant deux sous mode existe, l’un pour préciser s’il s’agit du solphège européen ou du Jianpu, en vigeure dans le monde chinois.</br>
			Le passage battant pavillon solphégique pourra être joint en sous-champ d’un enregistrement des notes jouées.
		</dd>
		
		<dt>Les code source (informatique)</dt>
		<dd>
			Les codes sources des programmes informatiques seront identifiés et si le code source est celui d’un language reconnu, il suffira de préciser le nom du language. Pour les languages éxotiques, peut répondus ou récents, il sera possible de définir les spécificité de ce language.<br />
			Pour les passage battant le pavillon du code source de programation non-scriptale, il est possible de joindre en option un binaire compilé en précisant le nom et le numéro du noyaut avec un compilateur duquel il a été compilé. Il est donc possible de joindre autant de binaires que de noyauts pour lesquels ils ont étés compilés. Idem pour *tex dont il est possible de joindre une vue du rendu<br />
			Pour les language webs tel HTML, il est possible de choisir si par défaut doit être affiché le code où le rendu intérprété par un moteur de rendu. Le choix est pertinant car un lecteur de PAP peut proposer au lecteur de montrer le rendu d’un passage de code HTML.<br />
			Enfin pour les scripts d’interpréter de commande il est possible de joindre une simmulation de l’éxecution.
		</dd>
		
		
		<dt>Les identifiant uniforme de ressource (Informatique)</dt>
		<dd>
			Les identifiant de ressources de l’isbn aux localisateurs uniformes de ressource (URL) sont aussi reconnus comme tel.
		</dd>
		
		<dt>Les codes d’Interpréteur de commandes (Informatique)</dt>
		<dd>
			Lorsque l’auteur veut ajouter un code d’interpréteur de commandes il ferra batre au passage concerné le pavillon adéquat, de même que pour les codes sources, il sera possible de préciser de quel type il s’agit (Bash, zsh, fish, DOS etc) et pour les intérpréteurs non pris en charge, il sera possible de préciser les spécificités. Il est aussi possible de définir si une commande est à éxecutée en tant que super-utilisateur ou en tant qu’utilisateur normal.
		</dd>
		
		
		<dt>Les formules mathématiques et phisiques</dt>
		<dd>
			l’insertion des formules mathématiques et chimiques est possible dans un language similaire à celui utilisé par Latex. Pour les formules chimiques on pourra préciser le type de représentation choisit.
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
		
		<dt>métalinguistique</dt>
		<dd>
			Une forme particulière de pavillonage, réunie sous le groupe métalinguistique, permet de repérer certaines plages de texte en fonction de leur sens en voici un exemple :
		
		<dl>
			<dt>Débat ouvert</dt>
			<dd>
				Les passages pour lesquels le débat est ouvert à l’heure de la rédaction de l’ouvrage peuvent être reconnus par le PAP (en particulier pour les ouvrages encyclopédiques ou scientifiques).
			</dd>
			
			<dt>Glose</dt>
			
			<dd>
				Cette série de pavillons pemet d’identifier les mots n’éxistant pas dans la langue principale de l’ouvrage. Elles peuvent toutes être combinées entre elles.
				En particulier les mots d’origine étrangère à la langue principale de l’ouvrage. pour ceuxla, il est possible de préciser en sous-champ, la langue originelle de la locution, la traduction de la locution.
				
				<dl>
					<dt>Les xénismes</dt>
					<dd>
						Ce pavillon précise que c’est une locution reconnu comme étrangere par les usagers de la langue et dont la transposition "tel quel" est voulue pour évoquer la culture étrangère. (en particulier les locutions latines et anglophones).
						</dd>
						
						<dt>Les mots techniques</dt>
						<dd>
						Sont concérnés les mots étrangers spécifiques à la discipline traité par l’ouvrage (l’anglais pour l’informatique ou l’italien pour la musique)
						</dd>
						
						<dt>La linguistique</dt>
						<dd>
						Le pavillon "linguistique" permet de marquer les mots d’une langue étrangère lorsque celle-ci est l’objet d’étude même de l’ouvrage.
						</dd>
						
						<dt>Technique</dt>
						<dd>
						pour les néologisme une option "technique" permet d’identfier un néologisme non léxicalisé par la langue principale de l’ouvrage mais répondu dans le jargon d’une proféssion.
						</dd>
						
						<dt>Néologismes subjectif</dt>
						<dd>
						Ce pavillon marque les néologisme inventés par l’auteur avec l’ouvrage même
						</dd>
						<dt>Acception du contexte</dt>
						<dd>
						Lorcequ’un mot polissémique à un sens particulier dans le contexte dont traite l’ouvrage, il peut être pavilloné de sorte à être reconnu comme tel.
						</dd>
						
						<dt>Autre</dt>
						<dd>
						Bat pavillon "autre" tout autre type de néologisme que ceux cités précedement.
						</dd>
					</dd>
				</dl>
			</dd>
		</dl>
		
		
		
		<dt>Autonymie</dt>
		<dd>
		Est pavilloné comme autonyme  un mot dont on veut désigner la substance  même lorsque celui-ci est cité ou se désigne lui-même ; elle désigne /in extenso/ le discours cité d’une citation.
		
		Exemple : Le nom "voiture" est du genre féminin.
		</dd>
		
		
		<dt>Les abréviations</dt>
		<dd>
		Pour distinger les raccourcissements d’un mot ou d’un groupe de mots, représentés alors par une lettre ou un groupe de lettres issus de ce mot, il a été prévu un pavillonage d’abreviation. une option des pavillonage d’abreviation permet d’entrer le mot abrégé en complet.
			<dl>
				<dt>Personnelles</dt>
				<dd>
				Sont dites "personnelles", les abréviations propres à l’ouvrage et devant jouir d’une présentation préalable pour pouvoir êtres comprise par le lécteur.
				</dd>
				<dt>Lettre suscrite</dt>
				<dd>
				Le mot est tronqué par contraction (on ne garde que la ou les premières lettres) et la finale (ou les finales) est écrite en hauteur, dans un petit format.
				</dd>
				
				
				<dt>Troncation</dt>
				<dd>
				Pavillon servant à préciser qu’un mot est tronqué en début ou en fin et, éventuellement, terminé par la voyelle o. devra être précisé en sous-champ le mot complet
				</dd>
				
				<dt>Réticence de plume</dt>
				<dd>
				Précise que l’abreviation est un masquage pudique des lettres d’un mot, en général ordurier, par un signe de ponctuation qui est souvent le point.
				</dd>
			</dl>
		</dd>
		
		
		
		<dt>Acronymie</dt>
		<dd>
		Sont les abréviation dont le résultat forme un mot prononcé sans l’épeler. le pavillon d’acronymie précise donc que le mot est à lire syllabairement et non à l’eppelé.
		devra être précisée dans des champs spéciaux les différents mots composants l’acronyme et leur initiales.
			<dl>
				<dt>Récursivité</dt>
				<dd>
				Est pavilloné comme récursif un acronyme dont une lettre renvoit à l’acronyme même, il s’agit donc d’une auto-référence dans un procédé de mise en abyme. Comme pour "Visa : Visa International Service Association." où encore "GNU : GNU’s Not UNIX" (« GNU n’est pas Unix ».). De plus, dans un sous-champ spécial pourra être précisée les raisons du choix de la lettre à l’origine de la récursivité.
				</dd>
				
				<dt>Mutualité</dt>
				<dd>
				Un acronyme mutuellement récursif est un acronyme ayant un mot étant lui même un acronyme dont un mot renvois vers le premier acronyme. Exemple : "HURD : Hird of Unix-Replacing Daemons" et "HIRD : Hurd of Interfaces Representing Depth"
				</dd>
				
				<dt>Imbrication</dt>
				<dd>
				Un acronyme récursivement imbriqué est un acronyme dont un mot est aussi un acronyme pouvant lui même être récursivement imbriqué et ainsi de suite, il peut ne pas s’agir d’auto-référence.
				Chacun des acronyme imbriqué pouvant avoir le même pavillonage que tout autre acronyme
				
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
					Précise que les initiales de plusieurs plusieurs mots accolées ensemble sont à éppelées.
					devra être précisée dans des champs spéciaux les différents mots composants l’acronyme et leur initiales.
				</dd>
				
				<dt>Initiales</dt>
				<dd>
					Pavillon équivalent à la siglaison mais limité aux noms propres.
				</dd>
			</dl>
		</dd>
		
		
		<dt>Les citations externes</dt>
		<dd>
		Tout passage reprennant une phrase d’un autre auteur peut être précisé avec la balise de citatiton externe, avec un champ qui précise le nom de l’auteur dont a étée reprise la citation, un champ pour l’ouvrage où elle apparut et un champ pour plus de préssision sur la partie exacte de la partition. Il peut de plus, être précisé en option si le fait que ce soit une citation est compréenssible d’aprés le contexte ou si le nom de l’auteur originel n’est précisé nul part ailleur qu’en option de pavillon.
		</dd>
		
		<dt>Exergue (typographie)</dt>
		<dd>
		Lorsque l’auteur veut indiquer à la feulle de style que certains passage de son texte peuvent êtres mis en exergues car porteurs d’une information décisive, il peut les pavillonnée en "exergue". Avec les options il peut choisir si la citation doit apparaître, avant son emplacement dans le texte ou aprés, et le cas échéant à quelle distance (les distance se comptan en "écran"/"page"/"vue").
		</dd>

		<dt>Licence (droit)</dt>
		<dd>
		Il est possible de préciser que la licence d’un passage est différente de celle du reste du texte. Il est possible de préciser autant le nom de la licence, que l’auteur de ce passage et le texte complet de la licence ainsi qu’un substantif.

			<dl>
				<dt>Source et crédits</dt>
				<dd>
				Déffinit l’auteur du passage.
				</dd>
				<dt>Non-authentifié</dt>
				<dd>
				Pour les passage non-authentifiés.
				</dd>
			</dl>
		</dd>

		<dt>Avertissement de contenu</dt>
		<dd>
		Averti le lecteur que le dévoilement d’un passage ne lui est préférable que sous certaines conditions.

			<dl>
				<dt>Sensibilité (sexualité, violence)</dt>
				<dd>
				</dd>

				<dt>Dévoilement d’intrigue (<a href="https://fr.wikipedia.org/wiki/Spoiler">divulgâchi</a>)</dt>
				<dd>
				Utile dans les papyrus traitants d’une autre œuvre. Dans l’argument d’une pièce ou le synopsis d’un film dont le lecteur ne désirerait pas avoir connaissance avant d’avoir jouis de cette œuvre.
				</dd>

				<dt>Divulgâchi interne<dt>
				<dd>
				Idem que plus haut sauf qu’il s’agit de marquer (dans le paratexte par exemple) les passages dévoilant l’intrigue mise en scène dans le papyrus même.
				</dd>
			</dl>

		</dd>
		<dt>Note</dt>
		<dd>
		Non, il ne s’agit pas de notes de bas de page ! (mais c’en est analogue)<br />
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

		<dt>Résolution de notation</dt>
		<dd>
		Il se peut que, compte tenu des fonctionalités sémantiques formelle présentées par Papyrus, certainse notations d’origine (d’ouvrages apparus avantla mise au point du format Papyrus) deviennent obsolotette car redondantes avec le traitement formel de Papyrus (Par exemple, l’avertissement de contenu qui n’a plus lieux d’être mentionné en toute lettres car traité par la fonctionnalité adequate). toute fois, pour préserver une trace du contenu original de l’auteur innitial, un champ est prévu.
		</dd>

		<dt>Exercice (pédagogie)</dt>
		<dd>
		Lorsqu’un ouvrage pdéagogique propose au lecteur une évaluation auto-corrective, les réponses sont cachées. Sinon, Elles sont simplement abscentes.<br />
		Il est aussi possible d’associer un nombre de point à chaque question.
		</dd>

		<dt>Surprise</dt>
		<dd>
		Il arrive que l’auteur veuille préserver un effet affin qu’il apparaisse subitement au lecteur. Dans le cas d’un livre en papier, celà forcera les feuille de style à placer le passage surprenant en début de page.
		</dd>
	</dl>
	
	
	
	<h2>Éditions et versionnement</h2>
	<p>
	Lorsque plusieurs versions d’un même ouvrage existent, un seul papyrus peut les contenir. Les différentes versions, qui chacune peuvent avoir tous les types de méta-données para-textuelles propres que le papyrus même, sont définie en entête. En suite, deux choix s’offre à l’auteur.<br />
	Soit les versions ne diffèrent entre elles que pour certains passages dans ce cas seuls ces passages feront l’objet d’une précision par des champs spéciaux.<br />
	Soit les deux œuvres sont très différentes et il est nécessaire que tout le contenu de chaque œuvre soit à part.
	</p>

	<p>
	En outre, les raisons ayant motivé la divergence peuvent être précisées :
	</p>

	<dl>
		<dt>Versions circonstantielles</dt>
		<dd>
		Désire de faire des versions spécifiques à des régions, des communautés culturelles, certains types de personnes identifiées par leur genre, la tranche d’âge ou la profession.
		</dd>

		<dt>Censure</dt>
		<dd>
		Lorsqu’une entité répressive (autorités, groupes criminels, etc) empèche la publication d’un passage.
		</dd>

		<dt>Auto-censure</dt>
		<dd>
		Cas particulier de la censoure où l’auteur, sachant d’office la réaction de l’entité répressive, renonce à publier un passage.
		</dd>

		<dt>Addenda</dt>
		<dd>
		Amélioration post-publicatoire
		</dd>

		<dt>Annulation</dt>
		<dd>
		Lorsqu’une annulation de modification s’oppére, les traces de cette modification ne sont pas suprimées mais marquées comme caduque affin de maintenir une traçabilité des différentes versions.
		</dd>
	<dl>

	<p>
	Évidement, un champ permet à l’auteur de s’exprimer sur les raisons de la publication d’une édition différente dans son ensemble ou de justifier chaque passage.
	</p>
	
	<h2>Les précisions de type paléographique</h2>
	Ces précisions cherchent à montrer un changement entre une anciènne graphie d’un mot utilisé.
	
	<dl>
		<dt>Les abreviations médievalles</dt>
		<dd>
			Le moyen âge ayant usé d’un florillège d’abreviation, leur pavillonage est rendu possible pour la rétro-compatibilité Paléographique. Ansi les abreviations médievalles se déclinent
			
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
					Des mots ou des syllabes entières peuvent être remplacés par un signe unique, que ce soient des ligatures (cf. esperluette) ou des lettres modifiées (barrées, surmontées de symboles, du titulus et autres signes). Ce simbole devra alors être joint en tant qu’image.
					Les notes tironiennes, par exemple, ont fourni un grand nombre d’abréviations de ce type, qui abondent surtout dans les manuscrits de droit .
				</dd>
				
				<dt>La substitution du <span class="autology">-us</span> (ou autre) par un <span class="autology">-x</span> ou <span class="autology">-<sup>9</sup></span> (ou autre)</dt>
				<dd>
					Comme la substitution du -us par le -x ou par un un-9 en éxposant était une pratique courante dans de bombreux manuscrits, Le PAP la reprends avec la possibilité de précisé le substitué et le substituant.
				</dd>
				
				<dt>Lettre suscrite</dt>
				<dd>
					Le mot est tronqué par contraction (on ne garde que la ou les premières lettres) et la finale (ou les finales) est écrite en hauteur, dans un petit format.
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
	Que se soit les différents, préambules, avant propos, notice, l’avis au lécteur, préfaces, Postface, avertissement, introductions, discours préliminaire, épilogue, léttre(s) ouverte(s), et autre éléments préambulatoire de l’auteur/traducteur/editeur et texte de tete des différents éditeurs/auteurs/traducteurs, post-scriptum. Mais aussi des informations compte à la propriété intélléctuelle, le nom, la déscription de la licence, le nom de ou des auteurs/éditeurs/traducteur, la date de parution, le déstinataire du document, les différentes éditions/représentations, ainsi que les crédits et le résumé des crédits, mes aussi les annexes, les apendices, les dossiers joints, l’ISBN/ISSN la discipline/domaine/mouvement auquel appartient l’ouvrage, le genre, la classification selon deleway, selon le système décimal et/ou selon un autre sysème dont le nom sera précisé, Une citation préambulatoire, Le dépot légal, l’édition, la date d’édition, information sur l’édition, ainsi que la manière dont à été édité l’ouvrage, la Bibliothéque distribuant l’ouvrage, des information sur l’édition en PAP, le frontispice, les dédicasses, Le résumé de l’œuvre, le résumé de quatrième de couverture etc.</p>
	Ces éléments sont extérieurs aux, texte même, le présente le précisent. Un champ est prévu pour chaque élément péritextuel. Tous ces éléments ne sont pas toujours utilisés en même temps par un ouvrage donné dans ce cas là
	</p>
	
	<h2>Les informations sur l’auteur</h2>
	
	<h3>L’auteur</h3>
	<p>
	La raison du PAP est de propossé un fichier unique pour chaque ouvrage, dans ce fichier seront réunie en déffinitive toutes les verssions et toutes les informations connues de l’œuvre. Une biographie de l’auteur par exemple n’a pas sa place dans le PAP car elle peut être variable, de plus elle concerne plus l’auteur que l’œuvre même alors que le fait de connaitre le nom de l’auteur suffirait pour pouvoir en retrouver une biographie, idem pour une adresse de jonction de l’auteur, d’autant que cette derrnière peut être vraiment très variable au cour du temps, voir innutile aprés la mort de l’auteur. Néanmoins, pour un minimum d’indépendance, il est tout de même possible d’intégrer certaines de ces informations dans le champ complexe des information variable, le fait de placer ces information dans ce champ informe de leur éxtrême variabilité et du fait qu’il ne sont donnés qu’à titre indicatif.<br />
	Comme ces informations varrient, leur différentes verssions connues à un moment donné, réstent enregistrée dans le PAP pour des raisons de philologie, avec en sous-champ la date d’abondon.
	</p>

	<p>
	Les informations sur l’auteur seront traitées selon les normes du projet connexe <a href="/ordinator/gprojets/#fCard">fCard</a>.
	</p>
	
	
	<h2>Multiplicité d’auteurs</h2>
	<p>
	Lorcequ’il y’a plusieurs pérsonne à avoir apportée leur travail à l’ouvrage chacune doit être citée avec le droit au mêmes champs comme cité plus haut.<br />
	Et comme il est forcément besoin de classer les auteurs il existe des groupes, Les auteurs pricipaux, les post-contributeurs, les commentateurs, les correcteurs sémiques, les correcteurs linguistiques, les traducteurs, et puis les éditeurs.
	</p>
	
	<p>
	Dans chaque groupe seront hyérarchisé les auteurs par importance, d’abbord l’ordre chronologique qui fera apparaître en premier, l’initiateur, celui qui a amorcer le projet de l’ouvrage, ou sinon la première personne, dans l’ordre chronologique à avoir collaborée à l’ouvrage en tant que membre d’un groupe.<br />
	Si des auteurs ont initier en même temps le projet de l’ouvrage alors le classement fera figurer en premier lieux les auteurs étant réstés le plus lontemps au sein du projet (cas assez rare).<br />
	En cas d’égalité entre un où plusieurs auteurs, ce sera le point de vue, dans le cas où l’ouvrage soit écrit majoritairement sous le point de vue d’un auteur particulier (cas assez rare).<br />
	Sinon, ce sera l’ordre d’apparition dans le texte, par exemple, pour un récit épistolaire ce sera l’auteur qui est à l’origine du premier message sauf si le sujet de l’ouvrage porte éssentiellement sur un autre auteur.<br />
	Si malgrés tout les auteurs réstent à égalité jusque là, alors la parole sera à l’ordre alphabétique.
	</p>
	
	<p>
	L’entrée de chaque auteur comportera les champs décrits dans ==Les informations sur l’auteur==.
	</p>
	
	<h2>Péritexte</h2>
	<p>
	Il s’agit des éllement para-textuels qui éscortent l’œuvre et en précisent le sens. Tous les péritextes, bien que reconnus en tant que champ particulier (par exemple, en tant que préambule/avant-propos/etc) Peuvent porter un intitulé différent du nom de leur champ (par exemple "Avant-proposs" pour la préface).
	</p>
	
	<p>
	À tous les péritextes, sont joint le nom de l’auteur particulier de ce péritexte, la date de rédaction du péritexte, la langue de publication, l’occasion de la publication, la raison de la rédaction de ce péritexte, le lieux de publication et la date de publication. Avec cela il est en plus possible de faire des nominations selon les mentions cochée par l’auteur/éditeur (par exemple, "préface de l’édition belege en néérlandais de l’année X par Monsieur Y").
	</p>
	
	<h3>Les Péritextes primaires</h3>
	<p>
	Sont regroupés sous cette dénomination, l’enssemble des péritexte de qualité érudie, il peut y’en avoir, en sous champ autant que nécessaire et tous supportent toutes les fonctionnalités de chapitrage et de pavillonage et les Les précisions de type paléographique.
	</p>
	
	<dd>
		<dt>La préface</dt>
		<dd>
		Une préface un texte d’introduction et de présentation. Placé en tête d’un livre, il en fait connaître les vues, le plan, prévient des objections ou répond à des critiques.<br />
		Dans la préface l’auteur éxplique certains choix et se déffends de certaines critiques.
		</dd>
		
		<dt>Le préambule</dt>
		<dd>
		Le préambule est un éclaircissement préliminaire plus ou moins utile, il donne un avant-goût de l’ouvrage, en marque le caractère et la portée, ou résume les événements accomplis antérieurement au récit.<br />
		Un préambule fait donc pluto partie du corps même du corps du texte principal que des élément d’éxcorte mais il reviendra toute foi à la feuille de style d’en définir la position lors de l’impression.
		</dd>
		
		<dt>La notice</dt>
		<dd>
		En réalité, les éléments présent dans la notice jouissent de champs a part entière dans le PAP, La notice ne peut donc que contenir un texte précisant comment trouver le texte dans une bibliothéque
		</dd>
		
		<dt>L’avis au lécteur</dt>
		<dd>
		L’avis au lecteur est un élément du paratexte d’un ouvrage placé par l’auteur ou l’éditeur au début de celui-ci afin de fournir au lecteur des informations jugées nécessaires pour la compréhension ou surtout l’acceptation de l’œuvre. Il peut s’agir d’un avertissement concernant le caractère choquant de la suite d’un roman ou encore signalant l’intention de l’écrivain afin qu’elle ne soit pas mal interprétée si elle risque de l’être.
		</dd>
		
		<dt>La postface</dt>
		<dd>
		Joue le même rôle que la préface à savoir que c’est un texte d’avertissement ou de commentaire placé à la fin d’un ouvrage, rédigé par l’auteur ou par une autre personne. évidement, la postion de l’élément relève du formatage mais la préface recèle des information d’un ordre différent de la préface.
		</dd>
		
		<dt>L’avertissement</dt>
		<dd>
		Il s’agit d’un Texte préliminaire de l’ouvrage destiné à éclairer le lecteur
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
	Dans le corps de texte, certains passage réclament une identification spéciale, ces identifications sont regroupées dans ce chapitre. La différence d’avec les option de corps de texte étant que les passages spéciaux peuvent regroupé plusieurs ligne tandisque une option de corps est souvent un formatage spécial contenu dans une phrase normale. Dans les supports intéractifs on préfférera à l’affichage "à la suite" du texte, un affichage "isolé", une partition, un code source où une equation par exemple seront affiché dans une partie de l’écran différente pour que le lecteur puisse continuer à lire le doccument tout en ayant le passage spécial sous les yeux, car souvent la suite du texte traite de ce passage. C’est encore plus vrais pour le visionnage d’un videograme ou pour l’écoute d’un audiograme.
	</p>
	
	<h2>Les sous-numérotation et liste</h2>
	Indépendament du chapitrage principal, peuvent apparaître dans le corps de texte certaines listes, parfoit numérotées. Il peuvent paraitre redondant mais assez souvent leur utilisation est indépandante de la hierarchie de chapitrage, cela peut être une liste de taches par exemple, le PAP prévois deux type de listes :
	
	<h3>Liste numérotées</h3>
	Il s’agit de listes toutes simples, avec une infinité de sous parties que nécessaire. Chaque partie pouvant contenir plusieurs "paragraphe" dans le "corps de texte".
	
	<h3>Les listes à point</h3>
	Il s’agit de listes très simples ne disposant d’aucune forme de numérotation ni de hierarchie.
	
	
	<h2>Les insérssions d’objet</h2>
	Est reconnu par "objet", toute ressource pas forcément textuelle pourtant inséré en milieur du corps de texte (typiquement des images, des tableaux, des videos, des sons)
	
	<h3>Les images</h3>
	L’insértion d’image est riche en parametre :
	
	<ul>
	<li>L’ancrage, précise comment l’image doit être encrée par rapport au texte, trois mode existent : au paragraphe : le texte longe l’image de gauche et de droite ; Comme caractère : L’image est bordée par deux carractères, elle est littéralement traitée comme un carractère donc ; Unique : L’image se retrouve au millieu d’une ligne suivant un mot ; Page/écran total, l’image prends une page entière, cela peut être la Nième (souvent première) page suivant ou précédant immédiattement un mot.</li>
	
	<li>La position en largeur, est obligatoir sauf quand l’option unique du parametre d’ancrage est activée. La position en largeur connais quatres possibilité "milieur", "gauche", "droite" et "pourcentage" ou la position de l’image doit être définie en pourcentage (le plus à gauche est 0% et le plus a droite 100%).</li>
	
	<li>Condition d’apparition, il existe deux manière de placer une image, l’une absolue l’autre relative. De manière générale, une image peut n’apparaître que X.x vue/page/écran, avant ou aprés l’apparition d’un passage, il s’agit de l’apparition relative. Sinon, lorceuque l’on veut qu’une image apparaisse à un moment fixe, pour l’ancrage au paragraphe, il faudra définir le premier caractère a droite de l’image ; Idem pour l’encrage en caractère ; Pour l’encrage unique il s’agit de définir quel ligne précède l’apparition de l’image.</li>
	</ul>
	
	<h3>Les tableaux</h3>
	Ils ont des paramètres similaires à ceux des images.
	
	<h3>Les audiogrames et vidéogrammes</h3>
	La encore affin d’ajouter un audiograme, il est possible d’ajouter des commandes de préouverture selon l’apparition d’un texte à l’écran
	
	
	<h1>Les balises textuelles</h1>
	Tout le texte est parssemé de précisions, certaines tenant des modifications apportées au texte au file de son éxistance, compte au déffinitions où à l’éxplication de certains mots, ou encore compte au notes de traduction, à la collaboration de différents de différents auteurs, ou des notes de bas de pages originelles.
	
	<h2>Les balises de corréspondance manuscrite</h2>
	Un PAP peut aussi embarquer une numérisation d’un manuscrit, un fac-similé de l’œuvre où un enregistrement phonographique de la lecture de celle-ci, dans ce cas un travail est fait sur la correspondance entre chaque caractère dans le corps de texte du PAP et son équivalent dans l’image de numérisation et/ou dans l’enregistrement phonographique.
	
	<h2>Les balises de modiffication</h2>
	Les balises auctorial les permettent d’indiquer tout changement apporté au texte au file du temps ainsi que la date et les personnes qui ont apporter ces modifications, la période où ces modifications on étée appliquées, ainsi que les raisons de ses modifications. Cela peut aussi être une traduction.
	
	Typiquement, chaque morceau de texte est rattaché à un auteur (lorsque plusieurs auteurs ont apportés des modiffications), une date de rédaction du passage, les raisons de la modification (Scensure, meilleur expression, adaptation etc...), De même que les circonstances de la première modiffication et la forme dont elle à été annoncée (par note de bas de page, par notice etc) et, éventuellement, le texte de justiffication joint par l’auteur. Les balises de modiffication contiennent donc toutes les verssions d’une œuvre.
	
	<h2>Les balises de traduction</h2>
	Les balises de traduction sont de deux types : les balises de correspondance de traduction et les balises de notice. Un PAP étant sensé comporté toutes les versions, même linguistiques d’un ouvrage, il existe donc plusieurs champs, ici les balises de traduction font le lien entre les phrases correspondante dans chaque verssion linguistique.
	Les balises de notice, compte à elles, contiennent pour champs, les justiffication données par le traducteur ainsi qu’un champ spécial pour l’auteur orriginel.
	
	<h2>La précision du contexte</h2>
	Des balises peuvent préciser le contexte concernant un passage.
	
	<h2>La déffinition</h2>
	Certains mots polissémiques peuvent avoir une signification très particulière dans l’œuvre, dans ce cas, des balises spéciales précisent
	
	
	<h1>Les variables circonstancielles</h1>
	Le PAP fournit aussi un certain nombre de fonctionnalité pouvant s’adapté aux situations spacio-temporèlles et même éditorialles. Ainsi, selon qu’une image soit à gauche, en haut en bas ou dans une autre page qu’un revois vers celle-ci (typiquement les "ci-contre", ci-bas) ou que l’auteur veuille faire allusion à la date ou au lieu de lecture des commandes existent à cet effet.
	
	<dl>
		<dt>date</dt>
		<dd>
		cette commande permet d’insérer la date de lecture lorsequ’il s’agit d’un support intéractif s’il peut la fournire et une suite de mot, (typiquement : "au moment où vous lisez"), choisit par l’auteur pour les supports figés comme une impression sur papier. L’auteur pourra, pour les support intéractifs, choisir la précision de la date (au Nième prét), son formatage et la manière dont apparait la date, si elle doit être cariable en temps réel sous les yeux du lecteur agissant comme une montre, si elle doit être figée à la date à laquelle le lecteur a ouvert le PAP ou si elle doit être figée à la date à laquelle sa mention apparait à l’écran du lecteur.
		</dd>
	
		<dt>lieux</dt>
		<dd>
		Cette commande permet d’insérer le lieux où le lécteur se situe au moment de la lecture pour les supports intéractifs si le dit support peut le fournir. et une suite de mot, (typiquement : "à l’endroit où vous étes"), choisit par l’auteur pour les supports figés comme une impression sur papier. comme pour /date la précision (si disponible) pourra être choisie (Pays, région, colléctivité, ville, cartier, adresse postalle, coordoonée polaire etc). et bénéficiera d’options analogues à /date : si elle doit être variable en fonction du déplacement (si le dispositif de lecture peut fournir une situation spatiale en temps réél) sous les yeux du lecteur agissant comme une boussone, si elle doit être figée au lieux où le lecteur a ouvert le PAP ou si elle doit être figée au lieux où sa mention apparait à l’écran du lecteur.
		</dd>
	
		<dt>name</dt>
		<dd>
		permet d’insérer des informations sur le lecteur pour les supports intéractifs quand ceux-cis sont disponibles, encore une fois toutes les options de /name peuvent être remplacée par un substitu choisit
		</dd>
	
		<dt>periférique</dt>
		<dd>
		permet d’inséerer des informations sur le périférique si celles-ci sont disponibles
		</dd>
	
		<dt>objetposition<dt>
		<dd>
		Comme un document PAP est senssé etre affiché sur plusieurs types de formats la postion de certains "objets" peut varié d’une vue à l’autre, la commande /objetposition est donc substituée par la position de l’objet donné en paramatre par rapport à la mention de la commande. Cette commande reçoit néamoins un parametre suplémentaire qui précise si la commande à été choisie par l’auteur original qui a éditer son œuvre en PAP, ou si l’auteur n’a pas édité l’œuvre en PAP mais dans un format traditionnel et que la commande /objetposition est une adaptation d’une mention brute que l’auteur aurait choisie (et qui devra être précisée dans un champ spécial).
		</dd>
	</dl>
	
	ces commandes peuvent evidement, agire entre elle avec des boucles et des conditions.
	</section>
<?php
genbottom();
?>
