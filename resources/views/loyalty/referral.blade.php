@extends('frontend.layouts.app')

@section('title', 'Programa de Indicação - KG Coins')

@section('content')

    @include('frontend.includes.headers.headerOne')

    <!-- PAGE HERO -->
    <div style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); border-bottom: 1px solid rgba(107,94,240,0.2); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="banner-gaming__tag mb-3">Programa de Fidelidade</div>
                    <h1 class="banner-gaming__title mb-2" style="font-size: clamp(1.6rem, 4vw, 2.5rem);">
                        Programa de <span>Indicação</span>
                    </h1>
                    <p class="section-subtitle-gaming mb-0">Indique amigos e ganhe pontos para cada novo cadastro</p>
                </div>
                <a href="{{ route('loyalty.dashboard') }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <i class="ph ph-arrow-left"></i> Voltar ao Painel
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div style="background: #13141e; padding: 3rem 0; min-height: 60vh;">
        <div class="container">

            <!-- CÓDIGO DE INDICAÇÃO -->
            <div class="loyalty-card mb-4" style="background: linear-gradient(135deg, #1c1535, #17133a); border: 1px solid rgba(107,94,240,0.4); position:relative; overflow:hidden;">
                <!-- glow decorativo -->
                <div style="position:absolute; top:-80px; right:-80px; width:220px; height:220px; background:radial-gradient(circle, rgba(107,94,240,0.2) 0%, transparent 70%); pointer-events:none;"></div>

                <h5 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:0.5rem;">Seu Código de Indicação</h5>
                <p style="color:#64748b; font-size:0.85rem; margin-bottom:1.5rem; font-family:'Inter',sans-serif;">
                    Compartilhe este código e ganhe <strong style="color:#8878F5;">{{ $referralBonus }} pontos</strong> cada vez que um amigo se registrar!
                </p>

                <div class="row align-items-center g-3">
                    <div class="col-md-6">
                        <div style="display:flex; gap:0; border:1px solid rgba(107,94,240,0.4); border-radius:8px; overflow:hidden;">
                            <input type="text" id="referralCode" value="{{ $referralCode }}" readonly
                                style="flex:1; background:#13141e; border:none; color:#8878F5; font-family:'Orbitron',sans-serif; font-size:1.1rem; font-weight:700; padding:12px 16px; outline:none; letter-spacing:2px;">
                            <button onclick="copyToClipboard()" id="copyBtn"
                                style="background:rgba(107,94,240,0.2); border:none; border-left:1px solid rgba(107,94,240,0.3); color:#8878F5; padding:12px 18px; cursor:pointer; font-family:'Exo',sans-serif; font-weight:700; font-size:0.8rem; display:flex; align-items:center; gap:6px; transition:all 0.2s; white-space:nowrap;"
                                onmouseover="this.style.background='rgba(107,94,240,0.35)'"
                                onmouseout="this.style.background='rgba(107,94,240,0.2)'">
                                <i class="ph ph-copy"></i> Copiar
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="https://wa.me/?text=Junte-se%20ao%20nosso%20programa%20de%20fidelidade%20com%20meu%20código%3A%20{{ $referralCode }}"
                               target="_blank"
                               style="background:rgba(37,211,102,0.15); border:1px solid rgba(37,211,102,0.4); color:#25d366; padding:8px 14px; border-radius:6px; font-family:'Exo',sans-serif; font-weight:700; font-size:0.8rem; text-decoration:none; display:inline-flex; align-items:center; gap:6px; transition:all 0.2s;"
                               onmouseover="this.style.background='rgba(37,211,102,0.25)'"
                               onmouseout="this.style.background='rgba(37,211,102,0.15)'">
                                <i class="ph ph-whatsapp-logo"></i> WhatsApp
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=Confira%20este%20programa%20de%20fidelidade%20com%20meu%20código%3A%20{{ $referralCode }}"
                               target="_blank"
                               style="background:rgba(29,161,242,0.15); border:1px solid rgba(29,161,242,0.4); color:#1da1f2; padding:8px 14px; border-radius:6px; font-family:'Exo',sans-serif; font-weight:700; font-size:0.8rem; text-decoration:none; display:inline-flex; align-items:center; gap:6px; transition:all 0.2s;"
                               onmouseover="this.style.background='rgba(29,161,242,0.25)'"
                               onmouseout="this.style.background='rgba(29,161,242,0.15)'">
                                <i class="ph ph-twitter-logo"></i> Twitter
                            </a>
                            <button onclick="copyReferralLink()"
                               style="background:rgba(107,94,240,0.15); border:1px solid rgba(107,94,240,0.4); color:#8878F5; padding:8px 14px; border-radius:6px; font-family:'Exo',sans-serif; font-weight:700; font-size:0.8rem; cursor:pointer; display:inline-flex; align-items:center; gap:6px; transition:all 0.2s;"
                               onmouseover="this.style.background='rgba(107,94,240,0.25)'"
                               onmouseout="this.style.background='rgba(107,94,240,0.15)'">
                                <i class="ph ph-link"></i> Copiar Link
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMO FUNCIONA -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">Como <span>Funciona</span></h2>
                </div>
                <div class="row g-3">
                    @foreach([
                        ['📤', 'Convide Amigos', 'Compartilhe seu código único com amigos via WhatsApp, redes sociais ou link direto'],
                        ['✅', 'Eles se Registram', 'Seus amigos usam seu código ao criar conta na KG Coins'],
                        ['🎉', 'Ganhe Pontos', 'Você recebe ' . $referralBonus . ' pontos automaticamente assim que o cadastro for confirmado'],
                    ] as [$emoji, $title, $desc])
                    <div class="col-md-4">
                        <div class="loyalty-card text-center h-100">
                            <div style="font-size:2.5rem; margin-bottom:12px; filter:drop-shadow(0 0 10px rgba(107,94,240,0.4));">{{ $emoji }}</div>
                            <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:8px;">{{ $title }}</h6>
                            <p style="color:#64748b; font-size:0.82rem; margin:0; font-family:'Inter',sans-serif; line-height:1.6;">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SUAS INDICAÇÕES (stats) -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">Suas <span>Indicações</span></h2>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="loyalty-card text-center">
                            <div style="font-size:2rem; color:#8878F5; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ $referralCount }}</div>
                            <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Amigos Indicados</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="loyalty-card text-center">
                            <div style="font-size:2rem; color:#34d399; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ number_format($referralCount * $referralBonus) }}</div>
                            <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Pontos Ganhos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="loyalty-card text-center">
                            <div style="font-size:2rem; color:#f59e0b; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ max(0, 5 - $referralCount) }}</div>
                            <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Para Badge Especial</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="loyalty-card" style="padding:0; overflow:hidden;">
                <div style="padding:1.25rem 1.5rem; border-bottom:1px solid rgba(107,94,240,0.15);">
                    <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin:0; font-size:0.9rem; text-transform:uppercase; letter-spacing:1px;">
                        <i class="ph ph-question" style="color:#8878F5;"></i> Perguntas Frequentes
                    </h6>
                </div>

                @foreach([
                    ['faq1', 'Quantos amigos posso indicar?', 'Você pode indicar quantos amigos quiser! Não há limite de indicações — continue compartilhando e acumulando pontos!'],
                    ['faq2', 'Quando meu amigo é considerado indicado?', 'Seu amigo é considerado indicado quando se registra usando seu código de referência e completa o cadastro na plataforma.'],
                    ['faq3', 'Quanto tempo leva para receber os pontos?', 'Os pontos são creditados automaticamente assim que seu amigo completa o registro. Você verá a transação no histórico imediatamente!'],
                    ['faq4', 'Posso compartilhar meu código em redes sociais?', 'Sim! Encorajamos você a compartilhar nas suas redes. Quanto mais pessoas você indicar, mais pontos você ganhará!'],
                    ['faq5', 'Há limite de pontos que posso ganhar por indicações?', 'Não! Você pode ganhar pontos ilimitados através do programa de indicação. Mais indicações = mais pontos!'],
                ] as $i => [$id, $question, $answer])
                <div style="border-bottom:1px solid rgba(107,94,240,0.1);">
                    <button
                        style="width:100%; background:transparent; border:none; padding:1rem 1.5rem; text-align:left; color:#f1f5f9; font-family:'Exo',sans-serif; font-weight:700; font-size:0.9rem; cursor:pointer; display:flex; align-items:center; justify-content:space-between; gap:12px;"
                        data-bs-toggle="collapse" data-bs-target="#{{ $id }}"
                        onmouseover="this.style.background='rgba(107,94,240,0.06)'"
                        onmouseout="this.style.background='transparent'">
                        <span>{{ $question }}</span>
                        <i class="ph ph-caret-down" style="color:#8878F5; flex-shrink:0; font-size:1rem;"></i>
                    </button>
                    <div id="{{ $id }}" class="collapse {{ $i === 0 ? 'show' : '' }}">
                        <div style="padding:0 1.5rem 1rem; color:#94a3b8; font-size:0.85rem; font-family:'Inter',sans-serif; line-height:1.7;">
                            {{ $answer }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    @include('frontend.includes.footers.footerOne')

@endsection

@section('script')
<script>
function copyToClipboard() {
    const code = document.getElementById('referralCode').value;
    navigator.clipboard.writeText(code).then(() => {
        const btn = document.getElementById('copyBtn');
        const original = btn.innerHTML;
        btn.innerHTML = '<i class="ph ph-check"></i> Copiado!';
        btn.style.color = '#34d399';
        setTimeout(() => {
            btn.innerHTML = original;
            btn.style.color = '#8878F5';
        }, 2000);
    });
}

function copyReferralLink() {
    const code = document.getElementById('referralCode').value;
    const link = `{{ url('/') }}?ref=${code}`;
    navigator.clipboard.writeText(link).then(() => {
        const btn = event.currentTarget;
        const original = btn.innerHTML;
        btn.innerHTML = '<i class="ph ph-check"></i> Link copiado!';
        btn.style.color = '#34d399';
        setTimeout(() => {
            btn.innerHTML = original;
            btn.style.color = '#8878F5';
        }, 2000);
    });
}
</script>
@endsection
