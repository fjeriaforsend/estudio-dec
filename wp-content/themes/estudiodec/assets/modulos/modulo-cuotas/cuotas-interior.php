<style>
                            .related.products .woocommerce-Price-currencySymbol {
                                color: #007bff;
                                font-weight: bolder;
                                font-size: 1.7rem;
                                font-family: "Orkney Bold", sans-serif;
                            }
                            #primary .summary.entry-summary .price {
                                margin-bottom: 0px !important;
                            }
                            ins {
                                display: none!important;
                            }
                            .single-product div.product p.price {
                                font-size: 1.41575em;
                                margin: 1.41575em 0;
                                margin: 0;
                            }
                            .summary.entry-summary .neumax_oferta {
                                display: flex;
                              flex-direction: column;
                            }
                            .summary.entry-summary .precio_var {
                              display: flex;
                              flex-direction: column;
                            }
                            .summary.entry-summary .woocommerce-Price-amount.amount {
                              display: flex;
                              flex-direction: column;
                            }
                            .summary.entry-summary .price_per {
                                font-size: 85%;
                                font-weight: 300;
                            }
                            .summary.entry-summary .neumax_oferta .woocommerce-Price-currencySymbol{
                            font-size: 28px !important;
                            font-weight: 700; 
                            color: #ff3333 !important;
                            -webkit-text-fill-color: #ff3333 !important;
                            order: 2;
                            height: 40px;
                            margin-bottom: 10px;
                            }
                            .summary.entry-summary .neumax_oferta .woocommerce-Price-currencySymbol:nth-child(3){
                            display:flex;
                            }
                            .summary.entry-summary .neumax_oferta p.price span{
                                font-size: 1rem !important;
                                font-weight: 500 !important;
                                color: #000000 !important;
                                margin: 0 0 1rem !important;
                                line-height: 100%;
                                -webkit-text-fill-color: #000 !important;
                            }
                            .summary.entry-summary .neumax_oferta p.price{
                            height:40px!important;
                            }
                            .summary.entry-summary .neumax_oferta p.price ins{
                            margin:0px!important;
                            }
                            .summary.entry-summary .neumax_oferta p.price .price_norm{
                            color:#000!important;
                            -webkit-text-fill-color:#000!important;
                            font-weight: 100 !important;
                            font-size: 0.8rem;
                            }
                            .summary.entry-summary .neumax_oferta .price_per {
                            font-size: 13px;
                            font-weight: 500;
                            order: 1;
                            margin-bottom: -12px;
                            }
                            .summary.entry-summary .neumax_oferta{
                             font-size: 20px;
                            margin: 15px 0;
                                margin-top: 15px;
                                margin-bottom: 15px;
                            font-weight: 500; 
                             text-align: left;
                            }
                            .summary.entry-summary #por_cant{
                            font-size: 13px;
                            font-weight: 500;
                            order: 6;
                            }
                            .summary.entry-summary #result {
                                order: 6;
                                color: #000;
                                font-size: 1.5rem;
                            }
                            .summary.entry-summary bdi {
                                font-family: "Source Sans Pro";
                            }
                            .summary.entry-summary .neumax_oferta p.price {
                                order: 3;
                            }.woocommerce-Price-amount bdi{display:none} del .woocommerce-Price-amount bdi{display:block} .related.products .price_per{display:none} .related.products .woocommerce-Price-currencySymbol { text-align: center;width: 100%;margin-bottom: 0px;}                            
                            .dropdown-cart bdi {display:block}
                            </style>
<div class="precio_var">
                        <span class="woocommerce-Price-amount amount"> 
                            <span style="display:flex;" class="neumax_oferta">
                                <div class="price_per">Precio por unidad</div >
                                <span class="woocommerce-Price-currencySymbol">$
                                    <span value="'.str_replace(",", "",$price).'" id="price_fix">'. $price.'</span> 
                                </span> 
                                <div id="por_cant"></div> 
                                <span id="result"></span>                           
                            </span>  
                        </span>
                        <span class="transfer">Paga en hasta 12 cuotas sin interés. Valor de cada cuota <b id="precio_12"class="due-price blue">$'.$price_transfer_discount.'</b>.
                        </span>
                        
   
</div>