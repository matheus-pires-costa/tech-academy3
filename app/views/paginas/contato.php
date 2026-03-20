<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="titulo text-center mb-4" style="margin-top: 20px;">
                <h1 class="titulo-letra" style="color: #a331dd;">Fale Conosco</h1>
                <p class="fs-5">Preencha o formulário abaixo para agendar sua avaliação.</p>
            </div>

            <form class="row g-3 needs-validation" id="form-contato" novalidate>

                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" required>
                    <div class="invalid-feedback">
                        Por favor, digite seu nome.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                    <div class="invalid-feedback">
                        Por favor, digite um e-mail válido.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="whatsapp" class="form-label">WhatsApp (com DDD)</label>
                    <input type="tel" class="form-control" id="whatsapp" placeholder="(XX) XXXXX-XXXX" required pattern="[0-9]{10,11}">
                    <div class="invalid-feedback">
                        Por favor, digite seu número de WhatsApp.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="servico" class="form-label">Serviço de Interesse</label>
                    <select class="form-select" id="servico" required>
                        <option value="" selected disabled>Selecione...</option>
                        <option value="Limpeza de Pele">Dermaplaning Divino</option>
                        <option value="Peeling de Diamante">Maassagem relaxante</option>
                        <option value="Peeling de Diamante">Massagem Com Ventosas</option>
                        <option value="Massagem Facial">Limpeza de Pele Profunda</option>
                        <option value="Massagem Facial">Microagulhamento (Dermapen)</option>
                        <option value="Outro">Outro (especificar na mensagem)</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, selecione um serviço.
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="data" class="form-label">Melhor Data</label>
                    <input type="date" class="form-control" id="data" required>

                    <div class="invalid-feedback">
                        Por favor, insira uma data.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="horario" class="form-label">Melhor Horário</label>
                    <select class="form-select" id="horario" required>
                        <option value="" selected disabled>Selecione...</option>
                        <option value="Manhã (09h-12h)">Manhã (09h-12h)</option>
                        <option value="Tarde (14h-18h)">Tarde (14h-18h)</option>
                    </select>

                    <div class="invalid-feedback">
                        Por favor, escolha um horario.
                    </div>
                </div>

                <div class="col-12">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="4" placeholder="Fale um pouco mais sobre o que você precisa..."></textarea>
                </div>
                
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-roxo btn-lg" type="submit">
                        Enviar Contato <i class="bi bi-send ms-2"></i>
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

