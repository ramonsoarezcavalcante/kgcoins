@extends('layouts.app')

@section('title', 'Programa de Indicação')

@section('content')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="mb-4">🤝 Programa de Indicação</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('loyalty.dashboard') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>

    <!-- Your Referral Code -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body">
                    <h5 class="card-title">Seu Código de Indicação</h5>
                    <div class="row align-items-center mt-4">
                        <div class="col-md-6">
                            <p class="mb-0">
                                Compartilhe este código com seus amigos e ganhe <strong>{{ $referralBonus }} pontos</strong> quando eles se registrarem!
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control bg-white text-dark"
                                       id="referralCode" value="{{ $referralCode }}" readonly>
                                <button class="btn btn-light" type="button" id="copyBtn" onclick="copyToClipboard()">
                                    <i class="fas fa-copy"></i> Copiar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Share Options -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <h5 class="mb-3">Compartilhe via:</h5>
            <div class="d-flex gap-2 flex-wrap">
                <a href="https://wa.me/?text=Junte-se%20ao%20nosso%20programa%20de%20fidelidade%20com%20meu%20código%20de%20indicação%3A%20{{ $referralCode }}"
                   target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}"
                   target="_blank" class="btn btn-primary">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://twitter.com/intent/tweet?text=Confira%20este%20programa%20de%20fidelidade%20com%20meu%20código%3A%20{{ $referralCode }}"
                   target="_blank" class="btn btn-info">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <button type="button" class="btn btn-secondary" onclick="copyReferralLink()">
                    <i class="fas fa-link"></i> Copiar Link
                </button>
            </div>
        </div>
    </div>

    <!-- How It Works -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Como Funciona</h5>
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <div style="font-size: 2.5rem; margin-bottom: 10px;">📤</div>
                            <h6>Convide Amigos</h6>
                            <p class="text-muted">Compartilhe seu código com amigos</p>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <div style="font-size: 2.5rem; margin-bottom: 10px;">✅</div>
                            <h6>Eles se Registram</h6>
                            <p class="text-muted">Seus amigos usam seu código ao se registrar</p>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <div style="font-size: 2.5rem; margin-bottom: 10px;">🎉</div>
                            <h6>Ganhe Pontos</h6>
                            <p class="text-muted">Você ganha {{ $referralBonus }} pontos automaticamente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Suas Indicações</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded">
                                <h3 class="text-primary mb-2">{{ $referralCount }}</h3>
                                <p class="mb-0 text-muted">Amigos Indicados</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded">
                                <h3 class="text-success mb-2">{{ $referralCount * $referralBonus }}</h3>
                                <p class="mb-0 text-muted">Pontos Ganhos</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded">
                                <h3 class="text-info mb-2">{{ 5 - $referralCount }}</h3>
                                <p class="mb-0 text-muted">Para Desbloquear Badge</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Perguntas Frequentes</h5>
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Quantos amigos posso indicar?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Você pode indicar quantos amigos quiser! Não há limite de indicações, então continue compartilhando e ganhando pontos!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Quando meu amigo é considerado indicado?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Seu amigo é considerado indicado quando se registra usando seu código de referência e completa o registro na plataforma.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Quanto tempo leva para receber os pontos?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Os pontos são creditados automaticamente em sua conta assim que seu amigo completa o registro. Você verá a transação no histórico imediatamente!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Posso compartilhar meu código em redes sociais?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Sim! Encorajamos você a compartilhar em suas redes sociais. Quanto mais pessoas você indicar, mais pontos você ganhará!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Há algum limite de pontos que posso ganhar?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Não! Você pode ganhar quantos pontos desejar através do programa de indicação. Quanto mais amigos você indicar, mais pontos acumulará!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function copyToClipboard() {
    const code = document.getElementById('referralCode').value;
    navigator.clipboard.writeText(code).then(() => {
        const btn = document.getElementById('copyBtn');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check"></i> Copiado!';
        setTimeout(() => {
            btn.innerHTML = originalHTML;
        }, 2000);
    });
}

function copyReferralLink() {
    const code = document.getElementById('referralCode').value;
    const link = `{{ url('/') }}?ref=${code}`;
    navigator.clipboard.writeText(link).then(() => {
        alert('Link de indicação copiado!');
    });
}
</script>
@endsection
