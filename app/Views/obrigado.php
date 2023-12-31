<?php
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar Digital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-screen">
        <div class="flex justify-center min-h-screen py-8" style="background-color: #0f2936">
            <div class="flex items-center w-full max-w-lg mx-auto lg:w-3/6">
                <div class="flex-1">
                    <div class="text-center">
                        <div class="flex flex-wrap justify-center mb-3">
                            <img src="https://painel.doardigital.com.br/api/upload/logomarca-bethania.png" class="h-[75px] rounded mx-auto mb-4 object-center" onerror="logoDefault(this)" />
                        </div>
                    </div>
                    <div class="bg-white rounded-md shadow-2xl p-5">
                        <div v-if="tipo == 'CREDIT_CARD'">
                            <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">
                                Obrigado! Doação realizada com sucesso
                            </h1>
                        </div>
                        <div v-else>
                            <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">
                                Obrigado! Sua Doação foi Processada
                            </h1>
                            <p class="text-sm font-normal text-gray-600 mb-8 text-center">
                                Abaixo encontra-se seu boleto / PIX
                            </p>
                            <div v-show="tipo == 'PIX'">
                                <img class="w-[250px] mx-auto" :src="'https://api-qrcode.digitalcombo.com.br/?code='+code">
                            </div>
                            <div v-show="tipo == 'BOLETO'">
                                <a :href="url" class="block rounded bg-green-500 text-white w-[320px] py-4 px-8 mx-auto mt-4">
                                    Clique qui para visualizar seu boleto
                                </a>
                                <span class="block text-center w-full py-4">ou copie o código abaixo</span>
                            </div>
                            <div class="border-2 border-gray-200 flex justify-between items-center mt-4 py-2">
                                <i class="fa-solid fa-link px-4"></i>
                                <input class="w-full outline-none bg-transparent" ref="codePix" v-model="code">
                                <button @click="copyPix" class="bg-indigo-500 text-white rounded text-sm py-2 px-5 mr-2 hover:bg-indigo-600">
                                    Copiar
                                </button>
                            </div>
                        </div>
                    </div> <br>
                    <div class="bg-white rounded-md shadow-2xl p-5">
                        <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">
                            Compartilhe essa Causa!
                        </h1>
                        <p class="text-sm font-normal text-gray-600 mb-8 text-center">
                            Ajude com a divulgação de nosso trabalho para
                            que possamos<br>alcançar mais pessoas e multiplicar o bem.
                        </p>
                        <div class="flex justify-around my-4">
                            <a :href="links?.facebook" target="_blank" rel="noopener noreferrer" class="border hover:bg-[#1877f2] w-12 h-12 fill-[#1877f2] hover:fill-white border-blue-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-blue-500/50 cursor-pointer">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a :href="links?.twitter" target="_blank" rel="noopener noreferrer" class="border hover:bg-[#1d9bf0] w-12 h-12 fill-[#1d9bf0] hover:fill-white border-blue-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a :href="links?.whats" target="_blank" rel="noopener noreferrer" class="border hover:bg-[#25D366] w-12 h-12 fill-[#25D366] hover:fill-white border-green-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-green-500/50 cursor-pointer">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a :href="links?.telegram" target="_blank" rel="noopener noreferrer" class="border hover:bg-[#229ED9] w-12 h-12 fill-[#229ED9] hover:fill-white border-sky-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </div>
                        <a href="#/" class="text-white bg-blue-500 block w-[200px] text-center mx-auto rounded py-2 mt-8">
                            Fazer uma nova doação
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky top-[100vh] bg-white text-center py-4 text-[11px]">
            {{inst.nome}} - CPF/CNPJ: {{inst.cpfCnpj}} |
            Endereço: {{inst.endereco.logadouro}} Nº {{inst.endereco.numero}} , {{inst.endereco.complemento}} - {{inst.endereco.bairro}}, <br>
            {{inst.endereco.cidade}} - {{inst.endereco.estado}} - CEP: {{inst.endereco.cep}} |
            Para dúvidas e cancelamentos entre em contato com nossa <br>
            central de relacionamento no telefone {{inst.telefone}}
            ou pelo e-mail: {{inst.email}} |
            Em até 30 dias após o processamento da transação, <br>
            realizaremos o ressarcimento integral dos valores doados
        </div>
    </div>
</body>


<body>


</body>

</html>