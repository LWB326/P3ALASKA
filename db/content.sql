insert into t_article values
(1, 'La piste de la viande',

'De chaque côté du fleuve glacé, l’immense forêt de sapins s’allongeait, sombre et menaçante. Les arbres, débarrassés par un vent récent de leur blanc manteau de givre, semblaient s’accouder les uns sur les autres, noirs et fatidiques dans le jour qui pâlissait. La terre n’était qu’une désolation infinie et sans vie où rien ne bougeait, et elle était si froide, si abandonnée que la pensée s’enfuyait, devant elle, au-delà même de la tristesse. Une envie de rire s’emparait de l’esprit, rire tragique comme celui du Sphinx, rire transi et sans joie, comme le sarcasme de l’Éternité devant la futilité de l’existence et les vains efforts de notre être. C’était le Wild. Le Wild farouche, glacé jusqu’au cœur, de la terre du Nord.

Sur la glace du fleuve, et comme un défi au néant du Wild, peinait un attelage de chiens-loups. Leur fourrure, hérissée, s’alourdissait de neige. À peine sorti de leur bouche, leur souffle se condensait en vapeur pour geler presque aussitôt et retomber sur eux en cristaux transparents, comme s’ils avaient écumé des glaçons.

Des courroies de cuir sanglaient les chiens et des harnais les attachaient à un traîneau qui suivait, assez loin derrière eux, tout cahoté. Le traîneau, sans patins, était formé d’écorces de bouleau solidement liées entre elles, et reposait sur la neige de toute sa surface. Son avant était recourbé en forme de rouleau afin qu’il rejetât sous lui, sans s’y enfoncer, l’amas de neige molle qui accumulait ses vagues moutonnantes. Une grande boîte, étroite et oblongue, était fortement attachée sur le traîneau et prenait presque toute la place. À côté d’elle se tassaient divers objets : des couvertures, une hache, une cafetière et une poêle à frire.');
insert into t_article values
(2, 'La louve','Le déjeuner terminé et le rudimentaire matériel du campement rechargé sur le traîneau, les deux hommes tournèrent le dos au feu joyeux et poussèrent de l’avant dans les ténèbres qui n’étaient point encore dissipées. Les cris d’appel, funèbres et féroces, continuaient à retentir et à se répondre dans la nuit et le froid. Ils se turent quand le jour, à neuf heures, commença à paraître. À midi, le ciel, vers le sud, parut se réchauffer et se teignit de couleur rose. Puis se dessina la ligne de démarcation que met la rondeur de la terre entre le monde du nord et les pays méridionaux où luit le soleil. Mais la couleur rose se fana rapidement. Un jour gris lui succéda, qui dura jusqu’à trois heures pour disparaître à son tour, et le pâle crépuscule arctique redescendit sur la terre solitaire et silencieuse. Lorsque l’obscurité fut revenue, les cris de chasse recommencèrent à droite, à gauche, provoquant de folles paniques parmi les chiens, tout harassés qu’ils étaient.

— Je voudrais bien, dit Bill en remettant pour la vingtième fois les chiens dans le droit sentier, qu’ils s’en aillent au diable et nous laissent tranquilles.');
insert into t_article values
(3, 'Le cri de la faim', 'La journée débuta sous de meilleurs auspices. Les deux hommes n’avaient pas perdu de chien durant la nuit, et c’est l’esprit plus léger qu’ils se remirent en chemin dans le silence, le noir et le froid. Bill semblait avoir oublié ses sinistres pressentiments et quand, à midi, les chiens renversèrent le traîneau à un mauvais passage, c’est en plaisantant qu’il accueillit l’accident.

C’était pourtant un effrayant pêle-mêle. Le traîneau, sens dessus dessous, demeurait entre le tronc d’un arbre et un énorme roc. Il fallut d’abord déharnacher les chiens afin de les dégager et de démêler leurs traits. Ceci fait et tandis que les deux hommes s’occupaient à remettre sur pied le traîneau, Henry aperçut N’a-qu’une-Oreille qui était en train de se défiler en rampant.

— Ici, toi, N’a-qu’une-Oreille ! cria-t-il en se retournant vers le chien.

Mais, au lieu de lui obéir, le chien fit un bond en avant et se sauva, en courant de toutes ses forces, ses harnais traînant derrière lui.

Tout là-bas, sur la piste, la louve l’attendait. En s’approchant d’elle, il parut soudain hésiter et ralentit sa course. Il la regardait fixement, avec crainte et désir à la fois. Elle semblait l’aguicher et lui sourire de toutes ses dents puis, en manière d’avance, fit un pas vers lui. N’a-qu’une-Oreille se rapprocha, mais en se tenant encore sur ses gardes, la tête dressée, les oreilles et la queue droites.');

/* raw password is 'john' */
insert into t_user values
(1, 'JohnDoe', '$2y$13$F9v8pl5u5WMrCorP9MLyJeyIsOLj.0/xqKd/hqa5440kyeB7FQ8te', 'YcM=A$nsYzkyeDVjEUa7W9K', 'ROLE_USER');

/* raw password is 'jane' */
insert into t_user values
(2, 'JaneDoe', '$2y$13$qOvvtnceX.TjmiFn4c4vFe.hYlIVXHSPHfInEG21D99QZ6/LM70xa', 'dhMTBkzwDKxnD;4KNs,4ENy', 'ROLE_USER');

/* raw password is '@dm1n' */
insert into t_user values
(3, 'admin', '$2y$13$A8MQM2ZNOi99EW.ML7srhOJsCaybSbexAj/0yXrJs4gQ/2BqMMW2K', 'EDDsl&fBCJB|a5XUtAlnQN8', 'ROLE_ADMIN');









insert into t_comment values
(1, 'Magnifique ! Grandiose, effrayant.', 1, 1);
insert into t_comment values
(2, 'Un voyage extraordinaire, des caractères sublimes.', 1, 2);
