<?php
        if (isset($_GET['error'])) {
            echo "
            <script>
                alert('Email ou mot de passe incorrecte !');
            </script>
            ";
        }
        if (isset($_GET['ok'])) {
            echo "
            <script>
                alert('Votre compte a été créer, entrez vos identifiants dans <Étudiant> ou <Entreprise>.');
            </script>
            ";
        }
        if (isset($_GET['ko'])) {
            echo "
            <script>
                alert('L\'utilisateur existe déjà, cliquez sur <Se connecter> pour vous connecter ou sur <S\'inscrire> pour créer un nouvel utilisateur.');
            </script>
            ";
        }
        if (isset($_GET['deco'])) {
            echo "
            <script>
                alert('Vous etes déconnecté.');
            </script>
            ";
        }

        if (isset($_GET['vous'])) {
            echo "
            <script>
                alert('Vous devez vous connecter.');
            </script>
            ";
        }

        if (isset($_GET['skynet'])) {
            echo "
            <script>
                alert('Un T-800 vous a éliminé, John Connor mène la résistance contre les robots');
            </script>
            ";
        }
?>