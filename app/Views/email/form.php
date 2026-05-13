<?php ?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title><?=$page_name?> - My Project1</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />

        <style>
            body { background-color: #f8f9fa; padding: 50px 0; }
            .form-container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
    </head>

    <body>

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <h2 class="mb-4 text-center"><?=$page_name?></h2>
            
            <form action="/email/send" method="POST" class="needs-validation" novalidate>
                
                <!-- Teksta lauks -->
                <div class="mb-3">
                    <label for="vards" class="form-label">Vārds un Uzvārds</label>
                    <input type="text" class="form-control" id="vards" name="vards" placeholder="Jānis Bērziņš" required>
                </div>

                <div class="row">
                    <!-- E-pasta lauks -->
                    <div class="col-md-6 mb-3">
                        <label for="epasts" class="form-label">E-pasta adrese</label>
                        <input type="email" class="form-control" id="epasts" name="epasts" placeholder="vards@piemers.lv" required>
                    </div>
                    <!-- Paroles lauks -->
                    <div class="col-md-6 mb-3">
                        <label for="parole" class="form-label">Parole</label>
                        <input type="password" class="form-control" id="parole" name="parole" required>
                    </div>
                </div>

                <!-- Izvēlnes saraksts (Select) -->
                <div class="mb-3">
                    <label for="pilseta" class="form-label">Pilsēta</label>
                    <select class="form-select" id="pilseta" name="pilseta">
                        <option selected disabled value="">Izvēlies...</option>
                        <option value="riga">Rīga</option>
                        <option value="valmiera">Valmiera</option>
                        <option value="liepaja">Liepāja</option>
                    </select>
                </div>

                <!-- Lielāks teksta lauks (Textarea) -->
                <div class="mb-3">
                    <label for="zinja" class="form-label">Papildu informācija</label>
                    <textarea class="form-control" id="zinja" name="zinja" rows="3"></textarea>
                </div>

                <!-- Radio pogas -->
                <div class="mb-3">
                    <label class="form-label d-block">Lietotāja tips</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tips" id="privatpersona" value="privatpersona" checked>
                        <label class="form-check-label" for="privatpersona">Privātpersona</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tips" id="uznemums" value="uznemums">
                        <label class="form-check-label" for="uznemums">Uzņēmums</label>
                    </div>
                </div>

                <!-- Faila augšupielāde -->
                <div class="mb-3">
                    <label for="fails" class="form-label">Pievienot CV (PDF)</label>
                    <input class="form-control" type="file" id="fails" name="fails">
                </div>

                <!-- Checkbox -->
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="noteikumi" required>
                    <label class="form-check-label" for="noteikumi">Piekrītu lietošanas noteikumiem</label>
                </div>

                <!-- Poga -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Nosūtīt datus</button>
                </div>

            </form>
        </div>
    </div>
</div>


        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
