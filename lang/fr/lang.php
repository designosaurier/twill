<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'auth' => [
        'back-to-login' => 'Se connecter',
        'choose-password' => 'Choisir un mot de passe',
        'email' => 'Email',
        'forgot-password' => 'Mot de passe oublié',
        'login' => 'Se connecter',
        'login-title' => 'Connexion',
        'oauth-link-title' => 'Entrez à nouveau votre mot de passe pour lier :provider à votre compte',
        'otp' => 'Password à usage unique',
        'password' => 'Mot de passe',
        'password-confirmation' => 'Confirmer le mot de passe',
        'reset-password' => 'Réinitialisation du mot de passe',
        'reset-send' => 'Envoyer un lien de réinitialisation de mot de passe',
        'verify-login' => 'Vérifier la connexion',
    ],
    'buckets' => [
        'intro' => 'Que souhaitez-vous mettre en avant aujourd\'hui?',
        'none-available' => 'Aucun contenu disponible',
        'none-featured' => 'Aucun contenu mis en avant',
        'publish' => 'Publier',
        'source-title' => 'Contenu disponible',
    ],
    'dashboard' => [
        'all-activity' => 'Toute l’activité',
        'create-new' => 'Créer',
        'empty-message' => 'Vous n\'avez aucune activité pour le moment.',
        'my-activity' => 'Mon activité',
        'my-drafts' => 'Mes brouillons',
        'search-placeholder' => 'Rechercher...',
        'statitics' => 'Statistiques',
    ],
    'dialog' => [
        'cancel' => 'Annuler',
        'ok' => 'OK',
        'title' => 'Mettre à la corbeille',
    ],
    'editor' => [
        'cancel' => 'Annuler',
        'delete' => 'Supprimer',
        'done' => 'Fermer',
        'title' => 'Editeur de contenu',
    ],
    'emails' => [
        'all-rights-reserved' => 'Tous droits réservés',
        'hello' => 'Bonjour!',
        'problems' => 'Si vous ne parvenez pas à cliquer sur le bouton ": actionText", copiez et collez l\'URL ci-dessous dans votre navigateur Web: [: url] (: url)',
        'regards' => 'Cordialement,',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Ajouter du contenu',
            'collapse-all' => 'Tout masquer',
            'create-another' => 'Créer un nouveau',
            'delete' => 'Supprimer',
            'expand-all' => 'Tout afficher',
            'loading' => 'Chargement',
            'open-in-editor' => 'Ouvrir dans l\'éditeur',
            'preview' => 'Prévisualiser',
        ],
        'browser' => [
            'add-label' => 'Ajouter des',
            'attach' => 'Ajouter des',
        ],
        'files' => [
            'add-label' => 'Ajouter',
        ],
        'generic' => [
            'switch-language' => 'Changer de langue',
        ],
        'map' => [
            'hide' => 'Masquer',
            'show' => 'Afficher',
        ],
        'medias' => [
            'btn-label' => 'Ajouter une image',
            'crop' => 'Recadrer',
            'crop-edit' => 'Editer le crop de l\'image',
            'crop-list' => 'crop',
            'crop-save' => 'Mettre a jour',
            'delete' => 'Supprimer',
            'download' => 'Télécharger',
            'edit-close' => 'Fermer infos',
            'edit-info' => 'Editer infos',
            'original-dimensions' => 'Original',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Appliquer',
        'clear-btn' => 'Annuler',
        'search-placeholder' => 'Recherche',
        'toggle-label' => 'Filtrer',
    ],
    'footer' => [
        'version' => 'Version',
    ],
    'form' => [
        'content' => 'Contenu',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Supprimer',
                'confirmation' => 'Êtes-vous sûr ? Ce changement ne peut être annulé.',
                'delete-content' => 'Supprimer le contenu',
                'title' => 'Supprimer le contenu',
            ],
        ],
        'editor' => 'Éditeur',
    ],
    'lang-manager' => [
        'published' => 'Publié',
    ],
    'lang-switcher' => [
        'edit-in' => 'Editer en',
    ],
    'listing' => [
        'add-new-button' => 'Ajouter',
        'bulk-actions' => 'Actions groupées',
        'bulk-clear' => 'Annuler',
        'columns' => [
            'featured' => 'Mis en avant',
            'name' => 'Nom',
            'published' => 'Publié',
            'show' => 'Afficher',
            'thumbnail' => 'Miniature',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Supprimer',
                'disclaimer' => 'Ce contenu ne sera pas supprimé mais déplacé dans la corbeille',
                'move-to-trash' => 'Mettre à la corbeille',
                'title' => 'Supprimer',
            ],
            'destroy' => [
                'confirm' => 'Supprimer définitivement',
                'destroy-permanently' => 'Supprimer définitivement',
                'disclaimer' => 'Ce contenu ne pourra pas être restauré',
                'title' => 'Supprimer définitivement',
            ],
        ],
        'dropdown' => [
            'delete' => 'Supprimer',
            'destroy' => 'Supprimer définitivement',
            'duplicate' => 'Dupliquer',
            'edit' => 'Modifier',
            'feature' => 'Mettre en avant',
            'publish' => 'Publier',
            'restore' => 'Restaurer',
            'unfeature' => 'Ne plus mettre en avant',
            'unpublish' => 'Dépublier',
        ],
        'filter' => [
            'all-items' => 'Tous',
            'draft' => 'Brouillons',
            'mine' => 'Mes contenus',
            'published' => 'Publié',
            'trash' => 'Corbeille',
        ],
        'languages' => 'Langues',
        'listing-empty-message' => 'Il n\'y a aucun contenu pour le moment.',
        'paginate' => [
            'rows-per-page' => 'Lignes par page:',
        ],
    ],
    'main' => [
        'create' => 'Créer',
        'draft' => 'Brouillon',
        'published' => 'Publié',
        'title' => 'Titre',
        'update' => 'Mettre à jour',
    ],
    'media-library' => [
        'files' => 'Fichiers',
        'filter-select-label' => 'Filtrer par tag',
        'images' => 'Images',
        'insert' => 'Insérer',
        'sidebar' => [
            'alt-text' => 'Texte alternatif',
            'caption' => 'Légende',
            'clear' => 'Annuler',
            'dimensions' => 'Dimensions',
            'empty-text' => 'Aucun fichier sélectionné',
            'files-selected' => 'fichiers sélectionnés',
            'tags' => 'Tags',
        ],
        'title' => 'Galerie de médias',
        'update' => 'Mettre a jour',
    ],
    'modal' => [
        'create' => [
            'button' => 'Créer',
            'create-another' => 'Créer et ajouter un(e) autre',
            'title' => 'Ajouter',
        ],
        'permalink-field' => 'Permalien',
        'title-field' => 'Titre',
        'update' => [
            'button' => 'Mettre à jour',
            'title' => 'Mettre à jour',
        ],
    ],
    'nav' => [
        'admin' => 'Admin',
        'cms-users' => 'Utilisateurs du CMS',
        'logout' => 'Déconnexion',
        'media-library' => 'Galerie de médias',
        'settings' => 'Paramètres',
        'close-menu' => 'Fermer le menu',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Réinitialisation du mot de passe',
            'content' => 'Vous recevez cet e-mail car nous avons reçu une réinitialisation de mot de passe. Si vous n\'avez pas demandé de réinitialisation du mot de passe, aucune autre action n\'est requise.',
        ],
        'welcome' => [
            'action' => 'Choisissez votre propre mot de passe',
            'content' => 'Vous recevez cet e-mail car un compte a été créé pour vous sur :nom.',
            'title' => 'Bienvenue',
        ],
    ],
    'overlay' => [
        'close' => 'Fermer',
    ],
    'previewer' => [
        'compare-view' => 'Comparer',
        'current-revision' => 'Active',
        'editor' => 'Editeur',
        'last-edit' => 'Edité le',
        'past-revision' => 'Ancienne',
        'restore' => 'Restaurer',
        'revision-history' => 'Historique des revisions',
        'single-view' => 'Prévisualiser les changements',
        'title' => 'Prévisualiser les changements',
        'unsaved' => 'Prévisualisation de vos changements non sauvegardés',
    ],
    'publisher' => [
        'cancel' => 'Annuler',
        'current' => 'Active',
        'end-date' => 'Date de fin',
        'immediate' => 'Maintenant',
        'languages' => 'Languages',
        'languages-published' => 'Publie',
        'last-edit' => 'Edité le',
        'preview' => 'Prévisualiser les changements',
        'publish' => 'Publier',
        'publish-close' => 'Publier et fermer',
        'publish-new' => 'Publier et créer un nouveau',
        'published-on' => 'Publié le',
        'restore-draft' => 'Restaurer en tant que brouillon',
        'restore-draft-close' => 'Restaurer en tant que brouillon et fermer',
        'restore-draft-new' => 'Restaurer en tant que brouillon et créer un nouveau',
        'restore-live' => 'Restaurer avec le statut publié',
        'restore-live-close' => 'Restaurer avec le statut publié et fermer',
        'restore-live-new' => 'Restaurer avec le statut publié et créer un nouveau',
        'restore-message' => 'Vous modifiez actuellement une ancienne révision de ce contenu (enregistrée par :user le :date). Apportez les modifications nécessaires et cliquez sur restaurer pour enregistrer une nouvelle révision.',
        'restore-success' => 'Révision restaurée.',
        'revisions' => 'Révisions',
        'save' => 'Enregistrer comme brouillon',
        'save-close' => 'Enregistrer comme brouillon et fermer',
        'save-new' => 'Enregistrer comme brouillon et créer un nouveau',
        'save-success' => 'Contenu sauvegardé. Tout va bien!',
        'start-date' => 'Date de début',
        'switcher-title' => 'Statut',
        'update' => 'Mettre à jour',
        'update-close' => 'Mettre à jour et fermer',
        'update-new' => 'Mettre à jour et créer un nouveau',
        'parent-page' => 'Page parente',
        'review-status' => 'Statut de révision',
        'visibility' => 'Visibilité',
    ],
    'select' => [
        'empty-text' => 'Désolé, aucune correspondance trouvée.',
    ],
    'uploader' => [
        'dropzone-text' => 'ou faites glisser de nouveaux fichiers ici',
        'upload-btn-label' => 'Ajouter',
    ],
    'user-management' => [
        '2fa' => 'Identification a 2 facteurs',
        '2fa-description' => 'Veuillez scanner ce code QR avec une application compatible avec Google Authenticator et entrez votre mot de passe unique ci-dessous avant de le soumettre. Consultez la liste des applications compatibles <a href=":link" target="_blank" rel="noopener">ici</a>.',
        '2fa-disable' => 'Entrez votre mot de passe unique pour désactiver l\'authentification à 2 facteurs',
        'active' => 'Actif',
        'cancel' => 'Annuler',
        'content-fieldset-label' => 'Paramètres utilisateur',
        'description' => 'Description',
        'disabled' => 'Désactivé',
        'edit-modal-title' => 'Éditer le nom d’utilisateur',
        'email' => 'Email',
        'enable-user' => 'Activer l’utilisateur',
        'enable-user-and-close' => 'Activer l\'utilisateur et fermer',
        'enable-user-and-create-new' => 'Activer l\'utilisateur et créer un nouveau',
        'enabled' => 'Activé',
        'language' => 'Language',
        'language-placeholder' => 'Sélectionner une langue',
        'name' => 'Nom',
        'otp' => 'Password à usage unique',
        'profile-image' => 'Image de profil',
        'role' => 'Rôle',
        'role-placeholder' => 'Selectionner un rôle',
        'title' => 'Titre',
        'trash' => 'Corbeille',
        'update' => 'Mettre à jour',
        'update-and-close' => 'Mettre à jour et fermer',
        'update-and-create-new' => 'Mettre à jour et créer un nouveau',
        'update-disabled-and-close' => 'Mettre à jour l\'utilisateur désactivé et fermer',
        'update-disabled-user' => 'Mettre à jour l\'utilisateur désactivé',
        'update-disabled-user-and-create-new' => 'Mettre à jour l\'utilisateur désactivé et créer un nouveau',
        'user-image' => 'Image',
        'users' => 'Utilisateurs',
    ],
];
