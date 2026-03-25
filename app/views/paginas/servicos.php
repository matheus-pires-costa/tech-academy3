<div class="servicos-container">
    <?php foreach($listaServicos as $s): ?>
        <div class="card-servico">
            <h3><?php echo $s['nome_servico']; ?></h3>
            <p><?php echo $s['descricao']; ?></p>
            <span>R$ <?php echo number_format($s['preco'], 2, ',', '.'); ?></span>
            <button>Agendar</button>
        </div>
    <?php endforeach; ?>
</div>