@extends('layouts.app')

@section('content')


    <style type="text/css">
      table {
        border-collapse: collapse;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
      }
      table td {
        border-collapse: collapse;
      }
      body {
        -ms-text-size-adjust: 100%;
        margin: 0;
        padding: 0;
        color: #e0e6e6;
        font-family: 'FullerSansDT Regular', Helvetica;
        font-size: 14px;
        mso-margin-top-alt: 0px;
        mso-margin-bottom-alt: 0px;
        mso-padding-alt: 0px 0px 0px 0px;
      }
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
        line-height: 100%;
      }
      img {
        outline: none;
        text-decoration: none;
        -ms-interpolation-mode: bicubic;
      }
      a img {
        border: none;
      }
      html {
        -webkit-text-size-adjust: none !important;
      }
      table {
        border-collapse: collapse;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
      }
      .appleLink-cecece a {
        color: #cecece !important;
        text-decoration: none;
      }
      @media screen {
        @font-face {
          font-family: 'FullerSansDT Regular';
          src: url('  ');
        }
        @font-face {
          font-family: 'FullerSansDT Bold';
          src: url('https://d2gpw04v015qcw.cloudfront.net/fonts/fuller_sans_dt/bold/2DC1D5_0_0-3c66aef6.woff');
        }
        @font-face {
          font-family: 'FullerSansDT ExtraLight';
          src: url('http://marketing-assets.nest.com/email-assets/fonts/FullerSansDT_ExtraLight.woff');
        }
        @font-face {
          font-family: 'AkkuratPro Regular';
          src: url('https://nest.com/fonts/lineto_akkurat_pro/regular.woff?email');
        }
        @font-face {
          font-family: AkkuratProLight;
          src: url('https://nest.com/fonts/lineto_akkurat_pro/light.woff?email');
        }
        @font-face {
          font-family: 'AkkuratPro Bold';
          src: url('https://nest.com/fonts/lineto_akkurat_pro/bold.woff?email');
        }
      }

      @media only screen and (min-width: 738px) {
      .font-weight-normal {
        font-weight: normal !important;
      }
      }

      @media only screen and (max-device-width: 737px) {
      .font-weight-normal {
        font-weight: normal !important;
      }
      .mobile-full-width {
        width: 100% !important;
      }
      .hero {
        width: 100% !important;
        height: auto !important;
        display: block !important;
      }
      .side-padding {
        padding-left: 25px !important;
        padding-right: 25px !important;
        padding-bottom: 20px !important;
      }
      .mobile-display {
        display: block !important;
        width: 100% !important;
        height: auto !important;
        overflow: visible !important
      }
      .mobile-hide {
        display: none !important;
      }
      .logo-cell {
        padding-right: 5px !important;
      }
      .paragraph {
        font-size: 15px !important;
        line-height: 19px !important;
      }
      .padding-top-0 {
        padding-top: 0px !important;
      }
      .padding-right-0 {
        padding-right: 0px !important;
      }
      .padding-bottom-0 {
        padding-bottom: 0px !important;
      }
      .padding-left-0 {
        padding-left: 0px !important;
      }
      .mobile-button {
        padding: 8px 20px !important;
        font-size: 14px !important;
      }
      .mobile-button-a {
        font-size: 14px !important;
      }
      }

      /* TARGET IPHONE 5 OR LESS */
      @media only screen and (min-device-width: 219px) and (max-device-width: 374px) {
      }

      /* TARGET IPHONE 6 */
      @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
      }

      /* TARGET IPHONE 6+ */
      @media only screen and (min-device-width: 414px) and (max-device-width: 735px) {
      }

      /* TARGET OUTLOOK.COM */
      .ExternalClass .outlook-button {
        padding: 7px 30px 9px !important;
      }
      .ExternalClass .font-weight-normal {
        font-weight: bold !important;
      }
      .ExternalClass .font-weight-normal {
        font-weight: bold !important;
      }
    </style>
    <!--[if gte mso 9]>
    <style type="text/css" media="all">
      .outlook-button {
        padding: 7px 30px 9px !important;
      }
    </style>
  <![endif]-->

  <div class="font-size-14px" style="-webkit-text-size-adjust: none; color: #e8eaed; font-family: 'FullerSansDT Regular',Helvetica; font-size: 14px; -ms-text-size-adjust: 100%; mso-margin-top-alt: 0px; mso-margin-bottom-alt: 0px; mso-padding-alt: 0px 0px 0px 0px; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; background-color: #e8eaed;"
    alink="#00afd8" link="#00afd8" bgcolor="#e8eaed" text="#e8eaed">
    <div style="width:100%; background-color: #e8eaed; margin-left:auto; margin-right:auto;">
      <center>
        <div style="position: relative; width: 100%; max-width: 630px; margin-left: auto; margin-right: auto;">
          <!--[if gte mso 9]>
            <table width="630" style="width:630px; max-width: 630px">
              <tr>
                <td width="630">
          <![endif]-->
          <table class="mobile-full-width" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="max-width: 630px; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tbody>
              <tr>
                <td width="100%" class="padding-top-0 padding-right-0 padding-left-0 padding-bottom-0" align="center" valign="top" style="border-collapse: collapse; background-color: #ffffff; padding-top: 15px; padding-right: 15px; padding-bottom: 0px; padding-left: 15px;">
                  <!-- HERO -->
                  <table class="mobile-full-width" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f3f3f3" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                    <tbody>
                      <tr>
                        <td width="100%" align="center" style="border-collapse: collapse;">
                          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                            <!--[if gte mso 9]>
                          <tr>
                            <td align="left">
                              <img src="http://marketing-assets.nest.com/email-assets/images/recurrent/family-accounts/family_accounts_hero_en-US_V2.jpg" width="600" height="230" border="0" alt="" style="display:block" />
                            </td>
                          </tr>
                        <![endif]-->
                            <tbody>
                              <tr style="mso-hide: all;">
                                <td width="100%" class="mobile-hide" style="border-collapse: collapse; color: #7b858e; font-size: 16px; line-height: 21px; font-family: 'FullerSansDT Regular', Helvetica, Arial, sans-serif; text-align: left; mso-hide: all" align="center">
                                  <img src="http://marketing-assets.nest.com/email-assets/images/recurrent/family-accounts/family_accounts_hero_en-US_V2.jpg" width="100%" class="mobile-hide" style="max-width: 600px; display: block;" alt="">
                                </td>
                              </tr>
                              <tr style="mso-hide: all;">
                                <td width="0" height="0" class="mobile-display" style="border-collapse: collapse; font-size: 0px; line-height: 0px; display: none; overflow: hidden" align="center">
                                  <img src="http://marketing-assets.nest.com/email-assets/images/recurrent/family-accounts/family_accounts_hero_mobile_en-US.jpg" width="0" height="0" class="hero" style="display: none;">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- /HERO -->
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f3f3f3" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                    <tbody>
                      <tr>
                        <td class="side-padding" width="100%" style="border-collapse: collapse; padding-left: 72px; padding-right: 72px; padding-bottom: 59px;">
                          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                            <tbody>
                              <tr>
                                <td class="hl" width="100%" align="center" style="border-collapse: collapse; color: #00afd8; font-size: 34px; line-height: 41px; font-family: AkkuratProLight, Helvetica, Arial, sans-serif; text-align: left; font-weight: 100; padding-top: 20px; padding-bottom: 15px;">
                                  Thank you  for registering .
                                  <div>
                                      We require you to confirm your email
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="paragraph" width="100%" align="center" style="border-collapse: collapse; color: #7b858e; font-size: 14px; line-height: 20px; font-family: 'AkkuratPro Regular', Helvetica, Arial, sans-serif; text-align: left; padding-bottom: 15px">
                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif


                                    </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="paragraph" width="100%" align="center" style="border-collapse: collapse; color: #7b858e; font-size: 14px; line-height: 20px; font-family: 'AkkuratPro Regular', Helvetica, Arial, sans-serif; text-align: left; padding-bottom: 15px">
                                  This is to ensure that we keep your account secure.Your detials are kept confidetials and we do not share or keep to any one
                                  your detials
                                </td>
                              </tr>
                              <tr>
                                  <td class="paragraph text font-weight-bond" width="100%" align="center" style="border-collapse: collapse; color: #7b858e; font-size: 14px; line-height: 20px; font-family: 'AkkuratPro Regular', Helvetica, Arial, sans-serif; text-align: left; padding-bottom: 15px">
                                      <b>  {{ __('Before proceeding, please check your email for a verification link.') }} </b>
                                  </td>

                              </tr>
                              <tr>
                                    <td class="paragraph" width="100%" align="center" style="border-collapse: collapse; color: #7b858e; font-size: 14px; line-height: 20px; font-family: 'AkkuratPro Regular', Helvetica, Arial, sans-serif; text-align: left; padding-bottom: 15px">
                                            <span class=" text  font-weight-bold ">{{ __('If you did not receive the email') }},</span>
                                      </td>
                              </tr>
                              <tr>
                                <td width="100%" style="border-collapse: collapse;">
                                  <!-- CTA -->
                                  <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt">
                                    <tbody>
                                      <tr>

                                        <td style="padding-left: 20px">


                                                 <a class=" btn btn-outline-info" style="font-family: 'AkkuratPro Regular', Helvetica, Arial, sans-serif; color: #00afd8; text-decoration: none" href="{{ route('verification.resend') }}">
                                                     {{ __('click here to request another') }}
                                                    </a>.

                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td width="100%" style="border-collapse: collapse; padding-top: 20px">
                                  <!-- /CTA -->
                                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                      <tr>
                                        <td width="100%" style="border-collapse: collapse; color: #7b858e; font-size: 12px; line-height: 18px; font-family: AkkuratProLight, Helvetica, Arial, sans-serif; font-weight: 100; padding-top: 20px; border-top: 1px solid #cacaca; text-align: left;">
                                          You are receiving this email because Jua Cali sent you this invitation.
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <!--[if (gte mso 9)|IE]>
              </td>
            </tr>
          </table>
          <![endif]-->
        </div>
      </center>
      <!-- footer -->
      <center>
        <div style="position: relative; width:100%; background-color: #7b858d; margin-left:auto; margin-right:auto;">
          <table width="100%" border="0" bgcolor="#7b858d" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tbody>
              <tr>
                <td bgcolor="#7b858d" class="footer-cell" align="center" style="text-align: center; font-family: AkkuratProLight, Helvetica; font-size: 9px; color: #ffffff; line-height: 19px; padding-top: 20px; padding-bottom: 22px; border-collapse: collapse;">©{{ date('Y') }} JuaCali Inc.&nbsp;
                    <a href="#" style="color: #ffffff; text-decoration: none;" target="_blank">
                    style="color: #ffffff; text-decoration: none;" target="_blank">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="/" style="color: #ffffff; text-decoration: none;" target="_blank">Terms &amp; Conditions</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </center>
      <!-- /footer -->
    </div>
  </div>


@endsection
