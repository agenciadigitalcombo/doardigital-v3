<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar Digital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div style="background-color: #0f2936" class="">
        <div class="block w-full lg:w-[50%] px-[20px] lg:px-[75px] py-[25px]">
            <div class="block w-[500px] max-w-[100%] mx-auto">
                <div class="text-center">
                    <div class="pt-3 flex flex-wrap justify-center mb-3">
                        <img src="https://painel.doardigital.com.br/api/upload/logomarca-bethania.png"
                            class="h-[75px] mx-auto mb-4 object-center rounded" onerror="logoDefault(this)" />
                    </div>
                </div>
                <form class="bg-white rounded-md shadow-2xl p-5" action="javascript:void(0)" method="POST"
                    @submit="fazerAssinatura">

                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">Faça uma Doação</h1>
                    <p class="text-sm font-normal text-gray-600 mb-8 text-center">Sua Doação Ajuda a Salvar
                        Vidas.<br>Preencha abaixo:</p>

                    <div class="w-full px-3 md:w-2/2 lg:w-3/3">
                        <div class="">
                            <label class=" block text-base font-medium text-black ">
                                Email
                            </label>
                            <div class="relative">
                                <input type="email" placeholder="seuemail@exemplo.com.br"
                                    class="w-full rounded-md border border-success py-3 px-12 text-black placeholder-[#929DA7] outline-none transition">
                                <span class="absolute top-1/2 left-4 -translate-y-1/2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.16797 10.0007C3.70773 10.0007 3.33464 10.3737 3.33464 10.834V16.6673C3.33464 17.1276 3.70773 17.5007 4.16797 17.5007H15.8346C16.2949 17.5007 16.668 17.1276 16.668 16.6673V10.834C16.668 10.3737 16.2949 10.0007 15.8346 10.0007H4.16797ZM1.66797 10.834C1.66797 9.45327 2.78726 8.33398 4.16797 8.33398H15.8346C17.2153 8.33398 18.3346 9.45327 18.3346 10.834V16.6673C18.3346 18.048 17.2153 19.1673 15.8346 19.1673H4.16797C2.78726 19.1673 1.66797 18.048 1.66797 16.6673V10.834Z"
                                                fill="#637381"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 2.50065C9.11594 2.50065 8.2681 2.85184 7.64298 3.47696C7.01786 4.10208 6.66667 4.94993 6.66667 5.83398V9.16732C6.66667 9.62756 6.29357 10.0007 5.83333 10.0007C5.3731 10.0007 5 9.62756 5 9.16732V5.83398C5 4.5079 5.52678 3.23613 6.46447 2.29845C7.40215 1.36077 8.67392 0.833984 10 0.833984C11.3261 0.833984 12.5979 1.36077 13.5355 2.29845C14.4732 3.23613 15 4.5079 15 5.83398V9.16732C15 9.62756 14.6269 10.0007 14.1667 10.0007C13.7064 10.0007 13.3333 9.62756 13.3333 9.16732V5.83398C13.3333 4.94993 12.9821 4.10208 12.357 3.47696C11.7319 2.85184 10.8841 2.50065 10 2.50065Z"
                                                fill="#637381"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="absolute top-1/2 right-4 -translate-y-1/2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.0512 3.14409C11.5739 2.48584 9.9234 2.32277 8.34584 2.6792C6.76829 3.03562 5.34821 3.89245 4.29741 5.12189C3.2466 6.35133 2.62137 7.88751 2.51496 9.50132C2.40854 11.1151 2.82665 12.7201 3.70692 14.0769C4.58719 15.4337 5.88246 16.4695 7.39955 17.03C8.91664 17.5905 10.5743 17.6456 12.1252 17.187C13.6762 16.7284 15.0373 15.7808 16.0057 14.4855C16.9741 13.1901 17.4978 11.6164 17.4987 9.99909V9.2329C17.4987 8.77266 17.8718 8.39956 18.332 8.39956C18.7923 8.39956 19.1654 8.77266 19.1654 9.2329V9.99956C19.1642 11.9763 18.5242 13.9002 17.3406 15.4834C16.157 17.0666 14.4934 18.2248 12.5978 18.7853C10.7022 19.3457 8.67619 19.2784 6.82196 18.5934C4.96774 17.9084 3.38463 16.6423 2.30875 14.984C1.23286 13.3257 0.72184 11.3641 0.851902 9.39166C0.981963 7.41922 1.74614 5.54167 3.03045 4.03902C4.31477 2.53637 6.05042 1.48914 7.97854 1.05351C9.90666 0.617872 11.9239 0.817181 13.7295 1.62171C14.1499 1.80902 14.3389 2.30167 14.1516 2.72206C13.9642 3.14246 13.4716 3.3314 13.0512 3.14409Z"
                                            fill="#3CA745"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.9236 2.74378C19.2492 3.06906 19.2495 3.59669 18.9242 3.92229L10.5909 12.264C10.4346 12.4204 10.2226 12.5083 10.0015 12.5083C9.78042 12.5084 9.56838 12.4206 9.41205 12.2643L6.91205 9.76426C6.58661 9.43882 6.58661 8.91118 6.91205 8.58574C7.23748 8.26031 7.76512 8.26031 8.09056 8.58574L10.001 10.4962L17.7451 2.74437C18.0704 2.41877 18.598 2.41851 18.9236 2.74378Z"
                                            fill="#3CA745"></path>
                                    </svg>
                                </span>
                            </div>
                            <p class="invisible text-sm text-red-500 mb-2">E-mail inválido</p>
                        </div>
                    </div>

                    <div class="w-full px-3 md:w-2/2 lg:w-3/3">
                        <div class="">
                            <label class=" block text-base font-medium text-black ">
                                Selecione tipo da Doação
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 space-x-2 rounded-xl bg-gray-200 p-2 mb-3">
                        <div>
                            <input type="radio" name="option" id="1" class="peer hidden" checked />
                            <label for="1"
                                class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Recorrente</label>
                        </div>

                        <div>
                            <input type="radio" name="option" id="2" class="peer hidden" />
                            <label for="2"
                                class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Único</label>
                        </div>
                    </div>

                    <div class="w-full mb-1 px-3 md:w-2/2 lg:w-3/3">
                        <div class="">
                            <label class=" block text-base font-medium text-black ">
                                Selecione valor da Doação
                            </label>
                        </div>
                    </div>
                    <ul class="grid grid-cols-3 gap-x-2 max-w-md mx-auto">

                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_yes">R$ 1.000,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                                👍
                            </div>

                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_no">R$ 500,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-2 right-3">
                                👎
                            </div>
                        </li>

                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-yellow-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_maybe">R$ 200,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                                🤔
                            </div>
                        </li>
                    </ul>

                    <ul class="grid grid-cols-3 gap-x-2 m-2 max-w-md mx-auto">
                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_yes">R$ 100,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                                👍
                            </div>

                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_no">R$ 75,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                                👎
                            </div>
                        </li>

                        <li class="relative">
                            <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-yellow-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="answer_maybe">R$ 50,00</label>

                            <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                                🤔
                            </div>
                        </li>
                    </ul>

                    <div class="w-full px-3 md:w-2/2 lg:w-3/3">
                        <div>
                            <label class="block text-base font-medium text-black">
                                Nome
                            </label>
                            <div class="relative">
                                <input @blur="atualizaRecover" required v-model="nameDonation"
                                    placeholder="Qual seu nome?"
                                    class="w-full rounded-md border border-success py-3 px-3 text-black placeholder-[#929DA7] outline-none transition">
                            </div>
                        </div>
                    </div>
                    <div class="-mx-4 px-3 flex flex-wrap">
                        <div class="w-full px-3 md:w-1/2 lg:w-1/2">
                            <div>
                                <label class="block text-base font-medium text-black">
                                    Celular
                                </label>
                                <div class="relative">
                                    <input @blur="atualizaRecover" required @input="maskTel" v-model="telefone"
                                        placeholder="DDD+Celular"
                                        class="w-full rounded-md border border-success py-3 px-3 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <label class="block text-base font-medium text-black ">
                                CPF
                            </label>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <input @blur="atualizaRecover" required v-model="cpf" @input="maskCpf"
                                        placeholder="000.000.000-00"
                                        class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mb-1 px-3 md:w-2/2 lg:w-3/3">
                        <div>
                            <label class="block text-base font-medium text-black">
                                Selecione Tipo da Doação
                            </label>
                        </div>
                    </div>
                    <ul class="grid grid-cols-3 gap-x-2 max-w-md mx-auto">
                        <li class="relative">
                            <input v-model="tipoPagamento" class="sr-only peer" type="radio" value="CREDIT_CARD"
                                id="tipo_card">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="tipo_card">
                                Cartão
                            </label>
                            <div class="absolute  w-5 h-5 peer-checked:block top-6 right-3">
                                <i class="fa fa-credit-card-alt" style="font-size:18px;"></i>
                            </div>
                        </li>
                        <li class="relative">
                            <input v-model="tipoPagamento" class="sr-only peer" type="radio" value="PIX" id="tipo_pix">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="tipo_pix">
                                PIX
                            </label>
                            <div class="absolute w-5 h-5 peer-checked:block top-6 right-3">
                                <i class="fa fa-qrcode" style="font-size:24px;"></i>
                            </div>
                        </li>
                        <li class="relative">
                            <input v-model="tipoPagamento" class="sr-only peer" type="radio" value="BOLETO"
                                id="tipo_boleto">
                            <label
                                class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="tipo_boleto">
                                Boleto
                            </label>
                            <div class="absolute w-5 h-5 peer-checked:block top-6 right-3">
                                <i class="fa fa-barcode" style="font-size:20px;"></i>
                            </div>
                        </li>
                    </ul> <br>



                    <div class="-mx-4 px-3 flex flex-wrap" v-if="showCep || tipoPagamento == 'CREDIT_CARD'">
                        <div class="w-full mb-1 px-3 md:w-2/2 lg:w-3/3">
                            <div>
                                <label class="block text-base font-medium text-black">
                                    Informe o endereço
                                </label>
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/2 lg:w-1/2">
                            <div>
                                <label class=" block text-base font-medium text-black ">
                                    CEP
                                </label>
                                <div class="relative">
                                    <input v-model="cep" @input="maskCep" placeholder="00000-000"
                                        class="w-full rounded-md border border-success py-3 px-3 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <label class="block text-base font-medium text-black">
                                Número Residência
                            </label>
                            <div class="mb-6 ">
                                <div class="relative">
                                    <input v-model="addressNumber" placeholder="N° Casa / AP"
                                        class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mb-1 px-3 md:w-2/2 lg:w-3/3" v-if="tipoPagamento=='CREDIT_CARD'">
                        <div>
                            <label class="block text-base font-medium text-black">
                                Informe os dados do cartão (Cartões Aceitos)
                            </label>
                        </div>
                        <img src="https://doacoesbethania.com.br/assets/image/bandeiras-aceitas.png"
                            class="w-full block" alt="bandeira">
                    </div>

                    <div v-if="tipoPagamento=='CREDIT_CARD'" class="w-full md:w-2/2 lg:w-3/3">
                        <div class="px-3">
                            <label class="mb-1 px-3block text-base font-medium text-black">
                                Nome igual no cartão
                            </label>
                            <div class="relative">
                                <input required v-model="nome" placeholder="Nome igual no cartão"
                                    class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                            </div>
                        </div>
                    </div>
                    <div v-if="tipoPagamento=='CREDIT_CARD'" class="w-full md:w-2/2 lg:w-3/3">
                        <div class="px-3">
                            <label class="mb-1 block text-base font-medium text-black">
                                Número cartão
                            </label>
                            <div class="relative">
                                <input required @input="maskNumero" v-model="numero" placeholder="0000 0000 0000 0000"
                                    class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                            </div>
                        </div>
                    </div>
                    <div v-if="tipoPagamento=='CREDIT_CARD'" class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-6 px-3">
                                <label class="mb-3 block text-base font-medium text-black">
                                    Vencimento
                                </label>
                                <div class="relative">
                                    <input required @input="maskValidade" v-model="vencimento" placeholder="MM/AA"
                                        class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-3 px-3">
                                <label class="mb-3 block text-base font-medium text-black">
                                    CCV
                                </label>
                                <div class="relative">
                                    <input required @input="maskCvv" v-model="cvv" placeholder="123"
                                        class="w-full rounded-md border border-danger py-3 pl-5 pr-12 text-black placeholder-[#929DA7] outline-none transition">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-3 px-1">
                        <label class="inline-flex items-center mt-3">
                            <input required type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                            <span class="ml-2 text-sm text-gray-700">
                                Aceito receber confirmações de pagamento "Sobre minhas Doações” *
                            </span>
                        </label>
                        <label class="inline-flex items-center mt-3">
                            <input required type="checkbox" class="form-checkbox h-5 w-5 text-red-600">
                            <span class="ml-2 text-sm text-gray-700">
                                Aceito receber novos e-mails com novidades.
                            </span>
                        </label>
                        <label class="inline-flex items-center mt-3">
                            <input required type="checkbox" class="form-checkbox h-5 w-5 text-red-600">
                            <span class="ml-2 text-sm text-gray-700">
                                Li e aceito as
                                <a class="text-[#05f] underline"
                                    href="https://doardigital.com.br/politica-de-privacidade/" target="_blank">
                                    Política de Privacidade.
                                </a> *
                            </span>
                        </label>
                    </div>
                    <button type="submit" :disabled="load"
                        class="block w-full bg-green-600 mt-5 py-2 rounded-2xl hover:bg-green-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">
                        <div v-if="load">
                            Processando...
                        </div>
                        <div v-else>
                            DOAR R$ {{ printValor }}
                        </div>
                    </button>
                    <div v-show="message" class="rounded bg-[#0F5] px-8 py-4 text-center">
                        {{message}}
                    </div>
                    <div class="block text-center py-1">
                        <p><br>Powered by Asaas</p>
                    </div>
                    <div class="flex justify-between mt-4"></div>
                </form>
            </div>
            <div class="block text-center py-2">
                <a href="#/" class=" inline text-[#EEE] underline ">
                    Voltar a página anterior
                </a>
            </div>
        </div>
        <img class="hidden lg:block z-index-[-1] fixed top-0 right-0 w-[50%] h-[100vh] object-cover"
            src="https://doardigital.com.br/wp-content/uploads/2022/11/1616586757e-book_acolhimento_que_gera_e_transforma_vidas_-_comunidade_bethania-01.jpg"
            onerror="imgDefault(this)">
    </div>
</body>

</html>