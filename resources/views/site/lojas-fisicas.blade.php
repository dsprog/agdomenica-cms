<x-site-layout>
    @section('title', 'Lojas Fisicas - ')
    @section('content')
    <main>
        <div id="lojas" class="py-10 px-5 bg-folhas">
            <h1 class="text-verde3 title text-center font-semibold text-3xl md:text-3xl">Onde encontrar</h1>
            <div class="container pt-10">
                <form id="buscar">
                    <div class="grid grid-cols-1 md:grid-cols-10 gap-4">
                        <div class="md:col-span-3">
                            <div><select name="tipo" id="tipo" class="campo">
                                    <option value="">Tipo do produto</option>
                                    <option value="Blends Meu Chá">Blends Meu Chá</option>
                                    <option value="Chá Soltos Ervas">Chá Soltos Ervas</option>
                                    <option value="Supplemento Alimentar">Supplemento Alimentar</option>
                                </select></div>
                        </div>
                        <div class="md:col-span-3">
                            <div><select name="produto" id="produto" class="campo">
                                    <option value="">Produto</option>
                                    <option value="ACELERA TERMOSHOT 20 sachês">ACELERA TERMOSHOT 20 sachês</option>
                                    <option value="AGONIADA 30G - 5 UNID">AGONIADA 30G - 5 UNID</option>
                                    <option value="ALCACHOFRA (RASURA)">ALCACHOFRA (RASURA)</option>
                                    <option value="ALCACHOFRA 30G - 5 UNID">ALCACHOFRA 30G - 5 UNID</option>
                                    <option value="ALCACUZ (RASURA)">ALCACUZ (RASURA)</option>
                                    <option value="ALCACUZ 30G - 5 UNID">ALCACUZ 30G - 5 UNID</option>
                                    <option value="ALECRIM (RASURA)">ALECRIM (RASURA)</option>
                                    <option value="ALECRIM 30G - 5 UNID">ALECRIM 30G - 5 UNID</option>
                                    <option value="ALFAFA">ALFAFA</option>
                                    <option value="AMORA 30G - 5 UNID">AMORA 30G - 5 UNID</option>
                                    <option value="AMORA BRANCA (RASURA)">AMORA BRANCA (RASURA)</option>
                                    <option value="AMORA BRANCA 30G - 5 UNID">AMORA BRANCA 30G - 5 UNID</option>
                                    <option value="AMORA PRETA (RASURA)">AMORA PRETA (RASURA)</option>
                                    <option value="ANIS ESTRELADO 30G-5 UNID">ANIS ESTRELADO 30G-5 UNID</option>
                                    <option value="ARNICA NACIONAL (RASURA)">ARNICA NACIONAL (RASURA)</option>
                                    <option value="ARNICA NACIONAL 30G-5 UNID">ARNICA NACIONAL 30G-5 UNID</option>
                                    <option value="ASSA PEIXE (RASURA)">ASSA PEIXE (RASURA)</option>
                                    <option value="ASSA PEIXE 30G - 5 UNID">ASSA PEIXE 30G - 5 UNID</option>
                                    <option value="BARBATIMAO (RASURA)">BARBATIMAO (RASURA)</option>
                                    <option value="BARBATIMAO 30G - 5 UNID">BARBATIMAO 30G - 5 UNID</option>
                                    <option value="BOLDO DO CHILE (RASURA)">BOLDO DO CHILE (RASURA)</option>
                                    <option value="BOLDO DO CHILE 30G-5 UNID">BOLDO DO CHILE 30G-5 UNID</option>
                                    <option value="CABELO DE MILHO (RASURA)">CABELO DE MILHO (RASURA)</option>
                                    <option value="CABELO DE MILHO 30G-5 UNID">CABELO DE MILHO 30G-5 UNID</option>
                                    <option value="CALENDULA (RASURA)">CALENDULA (RASURA)</option>
                                    <option value="CALENDULA 30G - 5 UNID">CALENDULA 30G - 5 UNID</option>
                                    <option value="CAMOMILA (INTEIRA)">CAMOMILA (INTEIRA)</option>
                                    <option value="CAMOMILA 30G - 5 UNID">CAMOMILA 30G - 5 UNID</option>
                                    <option value="CANA DO BREJO (RASURA)">CANA DO BREJO (RASURA)</option>
                                    <option value="CANA DO BREJO 30G - 5 UNID">CANA DO BREJO 30G - 5 UNID</option>
                                    <option value="CANELA 30G - 5 UNID">CANELA 30G - 5 UNID</option>
                                    <option value="CAPIM CIDREIRA (RASURA)">CAPIM CIDREIRA (RASURA)</option>
                                    <option value="CAPIM CIDREIRA 30G-5 UNID">CAPIM CIDREIRA 30G-5 UNID</option>
                                    <option value="CARQUEJA AMARGA (RASURA)">CARQUEJA AMARGA (RASURA)</option>
                                    <option value="CARQUEJA AMARGA 30G-5 UNID">CARQUEJA AMARGA 30G-5 UNID</option>
                                    <option value="CARQUEJA DOCE (RASURA)">CARQUEJA DOCE (RASURA)</option>
                                    <option value="CARQUEJA DOCE 30G - 5 UNID">CARQUEJA DOCE 30G - 5 UNID</option>
                                    <option value="CASCARA SAGRADA 30G-5 UNID">CASCARA SAGRADA 30G-5 UNID</option>
                                    <option value="CASTANHA DA INDIA (RASURA)">CASTANHA DA INDIA (RASURA)</option>
                                    <option value="CASTANHA DA INDIA30G-5 UNID">CASTANHA DA INDIA30G-5 UNID</option>
                                    <option value="CAVALINHA (RASURA)">CAVALINHA (RASURA)</option>
                                    <option value="CAVALINHA 30G - 5 UNID">CAVALINHA 30G - 5 UNID</option>
                                    <option value="CENTELLA ASIATICA (RASURA)">CENTELLA ASIATICA (RASURA)</option>
                                    <option value="CENTELLA ASIATICA 30G-5UNID">CENTELLA ASIATICA 30G-5UNID</option>
                                    <option value="CHA VERDE (RASURA)">CHA VERDE (RASURA)</option>
                                    <option value="CHA VERDE 30G - 5 UNID">CHA VERDE 30G - 5 UNID</option>
                                    <option value="CHAPEU DE COURO (RASURA)">CHAPEU DE COURO (RASURA)</option>
                                    <option value="CHAPEU DE COURO 30G-5 UNID">CHAPEU DE COURO 30G-5 UNID</option>
                                    <option value="COQ10(UBIQSOME)30UN">COQ10(UBIQSOME)30UN</option>
                                    <option value="DENTE DE LEAO (RASURA)">DENTE DE LEAO (RASURA)</option>
                                    <option value="DENTE DE LEAO 30G - 5 UNID">DENTE DE LEAO 30G - 5 UNID</option>
                                    <option value="ERVA BALEEIRA 30G - 5 UNID">ERVA BALEEIRA 30G - 5 UNID</option>
                                    <option value="ERVA DE BICHO (RASURA)">ERVA DE BICHO (RASURA)</option>
                                    <option value="ERVA DE BICHO 30G - 5 UNID">ERVA DE BICHO 30G - 5 UNID</option>
                                    <option value="ERVA DE SAO JOAO (RASURA)">ERVA DE SAO JOAO (RASURA)</option>
                                    <option value="ERVA DE SAO JOAO 30G-5 UNID">ERVA DE SAO JOAO 30G-5 UNID</option>
                                    <option value="ERVA DOCE (INTEIRA)">ERVA DOCE (INTEIRA)</option>
                                    <option value="ERVA DOCE 30G - 5 UNID">ERVA DOCE 30G - 5 UNID</option>
                                    <option value="ESPINHEIRA SANTA (RASURA)">ESPINHEIRA SANTA (RASURA)</option>
                                    <option value="ESPINHEIRA SANTA 30G-5 UNID">ESPINHEIRA SANTA 30G-5 UNID</option>
                                    <option value="EUCALIPTO (RASURA)">EUCALIPTO (RASURA)</option>
                                    <option value="EUCALIPTO 30G - 5 UNID">EUCALIPTO 30G - 5 UNID</option>
                                    <option value="FARINHA DE AVEIA">FARINHA DE AVEIA</option>
                                    <option value="FARINHA DE BANANA VERDE">FARINHA DE BANANA VERDE</option>
                                    <option value="FARINHA DE BERINJELA">FARINHA DE BERINJELA</option>
                                    <option value="FARINHA DE MARACUJA">FARINHA DE MARACUJA</option>
                                    <option value="FUNCHO 30G - 5 UNID">FUNCHO 30G - 5 UNID</option>
                                    <option value="GARRA DO DIABO (RASURA)">GARRA DO DIABO (RASURA)</option>
                                    <option value="GARRA DO DIABO 30G-5 UNID">GARRA DO DIABO 30G-5 UNID</option>
                                    <option value="GENGIBRE (RASURA)">GENGIBRE (RASURA)</option>
                                    <option value="GENGIBRE 30G - 5 UNID">GENGIBRE 30G - 5 UNID</option>
                                    <option value="GINKGO BILOBA (RASURA)">GINKGO BILOBA (RASURA)</option>
                                    <option value="GINKGO BILOBA 30G - 5 UNID">GINKGO BILOBA 30G - 5 UNID</option>
                                    <option value="GRAVIOLA (RASURA)">GRAVIOLA (RASURA)</option>
                                    <option value="GRAVIOLA 30G - 5 UNID">GRAVIOLA 30G - 5 UNID</option>
                                    <option value="GUACATONGA 30G - 5 UNID">GUACATONGA 30G - 5 UNID</option>
                                    <option value="GUACO (RASURA)">GUACO (RASURA)</option>
                                    <option value="GUACO 30G - 5 UNID">GUACO 30G - 5 UNID</option>
                                    <option value="HAMAMELIS 30G - 5 UNID">HAMAMELIS 30G - 5 UNID</option>
                                    <option value="HIBISCO (RASURA)">HIBISCO (RASURA)</option>
                                    <option value="HIBISCO 30G - 5 UNID">HIBISCO 30G - 5 UNID</option>
                                    <option value="HORTELA (RASURA)">HORTELA (RASURA)</option>
                                    <option value="HORTELA 30G - 5 UNID">HORTELA 30G - 5 UNID</option>
                                    <option value="INFUSOR PINCA - AN">INFUSOR PINCA - AN</option>
                                    <option value="IPE ROXO (RASURA)">IPE ROXO (RASURA)</option>
                                    <option value="IPE ROXO 30G - 5 UNID">IPE ROXO 30G - 5 UNID</option>
                                    <option value="JAMBOLAO (RASURA)">JAMBOLAO (RASURA)</option>
                                    <option value="JAMBOLAO 30G - 5 UNID">JAMBOLAO 30G - 5 UNID</option>
                                    <option value="MACA DESIDR CUBOS 30G-5UNID">MACA DESIDR CUBOS 30G-5UNID</option>
                                    <option value="MACA PERUANA PO - AN">MACA PERUANA PO - AN</option>
                                    <option value="MACELA (RASURA)">MACELA (RASURA)</option>
                                    <option value="MACELA 30G - 5 UNID">MACELA 30G - 5 UNID</option>
                                    <option value="MALVA (RASURA)">MALVA (RASURA)</option>
                                    <option value="MALVA 30G - 5 UNID">MALVA 30G - 5 UNID</option>
                                    <option value="MARACUJA (RASURA)">MARACUJA (RASURA)</option>
                                    <option value="MARACUJA 30G - 5 UNID">MARACUJA 30G - 5 UNID</option>
                                    <option value="MELISSA 30G - 5 UNID">MELISSA 30G - 5 UNID</option>
                                    <option value="MELISSA OFFICINALIS (RAS)">MELISSA OFFICINALIS (RAS)</option>
                                    <option value="MENTA 30G - 5 UNID">MENTA 30G - 5 UNID</option>
                                    <option value="MEU CHA AFINA">MEU CHA AFINA</option>
                                    <option value="MEU CHA DETOX GOLD">MEU CHA DETOX GOLD</option>
                                    <option value="MEU CHA ENERGIA">MEU CHA ENERGIA</option>
                                    <option value="MEU CHA EQUILIBRIO">MEU CHA EQUILIBRIO</option>
                                    <option value="MEU CHA SOSSEGO">MEU CHA SOSSEGO</option>
                                    <option value="MULUNGU (RASURA)">MULUNGU (RASURA)</option>
                                    <option value="MULUNGU 30G - 5 UNID">MULUNGU 30G - 5 UNID</option>
                                    <option value="OLIVEIRA (RASURA)">OLIVEIRA (RASURA)</option>
                                    <option value="OLIVEIRA 30G - 5 UNID">OLIVEIRA 30G - 5 UNID</option>
                                    <option value="OMEGA 3 VEGETAL 30 caps">OMEGA 3 VEGETAL 30 caps</option>
                                    <option value="PATA DE VACA (RASURA)">PATA DE VACA (RASURA)</option>
                                    <option value="PATA DE VACA 30G - 5 UNID">PATA DE VACA 30G - 5 UNID</option>
                                    <option value="PAU TENENTE (RASURA)">PAU TENENTE (RASURA)</option>
                                    <option value="PAU TENENTE 30G - 5 UNID">PAU TENENTE 30G - 5 UNID</option>
                                    <option value="PICAO PRETO 30G - 5 UNID">PICAO PRETO 30G - 5 UNID</option>
                                    <option value="POEJO (RASURA)">POEJO (RASURA)</option>
                                    <option value="POEJO 30G - 5 UNID">POEJO 30G - 5 UNID</option>
                                    <option value="QUEBRA PEDRA (RASURA)">QUEBRA PEDRA (RASURA)</option>
                                    <option value="QUEBRA PEDRA 30G - 5 UNID">QUEBRA PEDRA 30G - 5 UNID</option>
                                    <option value="ROMA 30G - 5 UNID">ROMA 30G - 5 UNID</option>
                                    <option value="ROSA BRANCA 30G - 5 UNID">ROSA BRANCA 30G - 5 UNID</option>
                                    <option value="RUIBARBO 30G - 5 UNID">RUIBARBO 30G - 5 UNID</option>
                                    <option value="SALSAPARRILHA 30G - 5UNID">SALSAPARRILHA 30G - 5UNID</option>
                                    <option value="SALVIA (RASURA)">SALVIA (RASURA)</option>
                                    <option value="SALVIA 30G - 5 UNID">SALVIA 30G - 5 UNID</option>
                                    <option value="SENE 30G - 5 UNID">SENE 30G - 5 UNID</option>
                                    <option value="SENE FOLHAS (RASURA)">SENE FOLHAS (RASURA)</option>
                                    <option value="SENE FOLICULO (RASURA)">SENE FOLICULO (RASURA)</option>
                                    <option value="SENE FOLICULO 30G - 5 UNID">SENE FOLICULO 30G - 5 UNID</option>
                                    <option value="STEVIA 30G - 5 UNID">STEVIA 30G - 5 UNID</option>
                                    <option value="SUCUPIRA 30G - 5 UNID">SUCUPIRA 30G - 5 UNID</option>
                                    <option value="TANCHAGEM (RASURA)">TANCHAGEM (RASURA)</option>
                                    <option value="TANCHAGEM 30G - 5 UNID">TANCHAGEM 30G - 5 UNID</option>
                                    <option value="UNHA DE GATO (RASURA)">UNHA DE GATO (RASURA)</option>
                                    <option value="UNHA DE GATO 30G - 5 UNID">UNHA DE GATO 30G - 5 UNID</option>
                                    <option value="UVA URSI (RASURA)">UVA URSI (RASURA)</option>
                                    <option value="UVA URSI 30G - 5 UNID">UVA URSI 30G - 5 UNID</option>
                                    <option value="UXI AMARELO 30G - 5 UNID">UXI AMARELO 30G - 5 UNID</option>
                                    <option value="VALERIANA 30G - 5 UNID">VALERIANA 30G - 5 UNID</option>
                                </select></div>
                        </div>
                        <div class="md:col-span-1">
                            <div><select name="uf" id="uf" class="campo">
                                    <option value="">Estado</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="RS">RS</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select></div>
                        </div>
                        <div class="md:col-span-2">
                            <div><select name="cidade" id="cidade" class="campo">
                                    <option value="">Cidade</option>
                                </select></div>
                        </div>
                        <div class="md:col-span-1"><input type="submit" value="Buscar" class="botao w-full"></div>
                    </div>
                </form>
                <div class="block overflow-x-auto">
                <table class="tblojas">
                    <thead>
                        <tr>
                            <th class="md:w-4/12 text-left text-sm md:text-lg bg-marrom1 p-5 text-white uppercase font-semibold rounded-tl-xl">Farmácia</th>
                            <th class="md:w-4/12 text-left text-sm md:text-lg bg-marrom1 p-5 text-white uppercase font-semibold">Cidade / UF / Bairro</th>
                            <th class="md:w-2/12 text-left text-sm md:text-lg bg-marrom1 p-5 text-white uppercase font-semibold">Endereço</th>
                            <th class="md:w-2/12 text-left text-sm md:text-lg bg-marrom1 p-5 text-white uppercase font-semibold rounded-tr-xl">Contato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-white p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">(19) 99999-9999</td>
                        </tr>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">(19) 99999-9999</td>
                        </tr>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-white p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">(19) 99999-9999</td>
                        </tr>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">(19) 99999-9999</td>
                        </tr>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-white p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-white p-4">(19) 99999-9999</td>
                        </tr>
                        <tr class="w-full">
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Loja 1</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Cidade / UF / Bairro</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">Endereço, Numero</td>
                            <td class="text-left text-xs md:text-base bg-gray-100 p-4">(19) 99999-9999</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </main>
    @endsection
</x-site-layout>
