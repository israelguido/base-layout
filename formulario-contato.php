<link href="css/form.css" rel="stylesheet" id="form-css">
    <div class="card-body">
        <h4 class="card-title text-center">Contato</h4>
        <form class="login-form mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label>Nome <span class="text-danger">*</span></label>
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input type="text" class="form-control pl-5" placeholder="Nome" name="s" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label>Sobrenome <span class="text-danger">*</span></label>
                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                        <input type="text" class="form-control pl-5" placeholder="Sobrenome" name="s" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group position-relative">
                        <label>E-mail <span class="text-danger">*</span></label>
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group position-relative">
                        <label>Comentário <span class="text-danger">*</span></label>
                        <i data-feather="book" class="fea icon-sm icons"></i>
                        <textarea name="comment" id="" class="form-control pl-5" placeholder="Comentário" required=""></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">Enviar</button>
                </div>
            </div>
        </form>
    </div>