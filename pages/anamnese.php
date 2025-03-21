<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/anamnese.css">
    <title>ANAMNESE</title>
</head>
<body>

    <!-- Botão de Voltar -->
    <div class="back-btn">
        <a href="Home.php"><i class="bi bi-arrow-left-circle-fill" id="iconeVoltar"></i></a>
    </div>

    <div class="container">
        <h2>Anamnese</h2>

        <div class="form-group">
            <label for="motivo-consulta">Motivo da consulta</label>
            <input type="text" id="motivo-consulta" placeholder="Motivo da consulta">
        </div>

        <div class="form-group">
            <label for="inicio-sintomas">Início dos sintomas</label>
            <input type="text" id="inicio-sintomas" placeholder="Dia / Mês / Ano">
        </div>

        <div class="form-group">
            <label for="descricao-sintomas">Descrição dos sintomas</label>
            <textarea id="descricao-sintomas" rows="4" placeholder="Descreva os sintomas..."></textarea>
        </div>

        <div class="form-group">
            <label>Já aconteceu antes?</label>
            <div class="checkbox-group">
                <input type="radio" id="aconteceu-sim" name="aconteceu">
                <label for="aconteceu-sim">Sim</label>

                <input type="radio" id="aconteceu-nao" name="aconteceu" style="margin-left: 15px;">
                <label for="aconteceu-nao">Não</label>
            </div>
        </div>

        <div class="form-group">
            <label for="doencas-cronicas">Doenças crônicas?</label>
            <div class="checkbox-group">
                <input type="checkbox" id="doenca-cronica-sim">
                <label for="doenca-cronica-sim">Sim</label>

                <input type="checkbox" id="doenca-cronica-nao" style="margin-left: 15px;">
                <label for="doenca-cronica-nao">Não</label>
            </div>
            <input type="text" id="quais-doencas" placeholder="Se sim, quais?" style="margin-top: 10px;">
        </div>

        <div class="form-group">
            <label for="alergias">Alergias?</label>
            <div class="checkbox-group">
                <input type="checkbox" id="alergias-sim">
                <label for="alergias-sim">Sim</label>

                <input type="checkbox" id="alergias-nao" style="margin-left: 15px;">
                <label for="alergias-nao">Não</label>
            </div>
            <input type="text" id="quais-alergias" placeholder="Se sim, quais?" style="margin-top: 10px;">
        </div>

        <div class="form-group">
            <label for="medicamentos">Medicamentos contínuos?</label>
            <div class="checkbox-group">
                <input type="checkbox" id="medicamentos-sim">
                <label for="medicamentos-sim">Sim</label>

                <input type="checkbox" id="medicamentos-nao" style="margin-left: 15px;">
                <label for="medicamentos-nao">Não</label>
            </div>
            <input type="text" id="quais-medicamentos" placeholder="Se sim, quais?" style="margin-top: 10px;">
        </div>

        <div class="form-group">
            <label for="doencas-familia">Doenças na família?</label>
            <div class="checkbox-group">
                <input type="checkbox" id="doenca-familia-sim">
                <label for="doenca-familia-sim">Sim</label>

                <input type="checkbox" id="doenca-familia-nao" style="margin-left: 15px;">
                <label for="doenca-familia-nao">Não</label>
            </div>
            <input type="text" id="quais-doencas-familia" placeholder="Se sim, quais?" style="margin-top: 10px;">
        </div>

        <div class="form-group">
            <label>Fuma?</label>
            <div class="checkbox-group">
                <input type="radio" id="fuma-sim" name="fuma">
                <label for="fuma-sim">Sim</label>

                <input type="radio" id="fuma-nao" name="fuma" style="margin-left: 15px;">
                <label for="fuma-nao">Não</label>
            </div>
        </div>

        <div class="form-group">
            <label>Ingere álcool?</label>
            <div class="checkbox-group">
                <input type="radio" id="alcohol-sim" name="alcohol">
                <label for="alcohol-sim">Sim</label>

                <input type="radio" id="alcohol-nao" name="alcohol" style="margin-left: 15px;">
                <label for="alcohol-nao">Não</label>
            </div>
        </div>

        <div class="form-group">
            <label>Pratica atividade física?</label>
            <div class="checkbox-group">
                <input type="radio" id="atividade-fisica-sim" name="atividade-fisica">
                <label for="atividade-fisica-sim">Sim</label>

                <input type="radio" id="atividade-fisica-nao" name="atividade-fisica" style="margin-left: 15px;">
                <label for="atividade-fisica-nao">Não</label>
            </div>
        </div>

        <div class="submit-btn">
            <button type="submit">Próximo</button>
        </div>

    </div>

</body>
</html>