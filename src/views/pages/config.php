<?= $render('header', ['loggedUser' => $loggedUser]); ?>


<section class="container main">

    <?= $render('sidebar', ['activeMenu' => 'config']); ?>

    <div class="configOptions">

        <form method="POST" action="<?= $base; ?>/config" enctype="multipart/form-data">

            <h2>Configurações</h2>

            <!-- Foto de Perfil -->
            <div class="file-container">
                <div class="option file">
                    <label>Alterar foto de perfil</label>
                    <input type="file" name="avatar" id="avatarInput" accept="image/*"/>
                    <br/>
                    <img class="avatar-preview" id="avatarPreview" src="<?= $base; ?>/media/avatars/<?= $user->avatar; ?>">
                </div>

                <div class="option file">
                    <label>Alterar foto de capa</label>
                    <input type="file" name="cover" id="coverInput" accept="image/*"/>
                    <br/>
                    <img class="cover-preview" id="coverPreview" src="<?= $base; ?>/media/covers/<?= $user->cover; ?>">
                </div>
            </div>

            <hr>

            <!-- Nome Completo -->
            <div class="option data">
                <label>Nome Completo</label>
                <input type="text" name="name" value="<?= htmlspecialchars($user->name); ?>"/>
            </div>

            <!-- E-mail -->
            <div class="option data">
                <label>E-mail</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user->email); ?>"/>
            </div>

            <!-- Data de Nascimento -->
            <div class="option data">
                <label>Data de nascimento</label>
                <input type="text" id="birthdate" name="birthdate"
                       value="<?= date('d/m/Y', strtotime($user->birthdate)); ?>"/>
            </div>

            <!-- Cidade -->
            <div class="option data">
                <label>Cidade</label>
                <input type="text" name="city" value="<?= htmlspecialchars($user->city); ?>"/>
            </div>

            <!-- Trabalho -->
            <div class="option data">
                <label>Trabalho</label>
                <input type="text" name="work" value="<?= htmlspecialchars($user->work); ?>"/>
            </div>

            <hr>
            <h4>Mudar senha?</h4>

            <!-- Nova Senha -->
            <div class="option data">
                <label>Nova senha</label>
                <input type="password" name="newPassword"/>
            </div>

            <!-- Senha Atual -->
            <div class="option data">
                <label>Senha atual para confirmar</label>
                <input type="password" name="password"/>
            </div>

            <hr>
            <br>

            <!-- Botão de envio -->
            <button class="button" type="submit">Aplicar alterações</button>

        </form>

    </div>

</section>

<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.getElementById('birthdate'),
        {
            mask: '00/00/0000'
        }
    );

    // Função para atualizar a pré-visualização da imagem
    function updateImagePreview(input, previewId) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById(previewId).src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }

    // Eventos para pré-visualização do avatar
    document.getElementById('avatarInput').addEventListener('change', function () {
        updateImagePreview(this, 'avatarPreview');
    });

    // Eventos para pré-visualização da capa
    document.getElementById('coverInput').addEventListener('change', function () {
        updateImagePreview(this, 'coverPreview');
    });


</script>
