<?php

/*

Copyright (c) 2013 by Matt Zabriskie

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

abstract class MimeMailConstants {
    const
        CHARSET_WESTERN             = 'ISO-8859-1',
        CHARSET_ARABIC              = 'ISO-8859-6',
        CHARSET_ARMENIAN            = 'ARMSCII-8',
        CHARSET_BALTIC              = 'ISO-8859-13',
        CHARSET_CELTIC              = 'ISO-8859-14',
        CHARSET_CENTRAL_EUROPE      = 'ISO-8859-2',
        CHARSET_CHINESE_SIMPLIFIED  = 'GB2312',
        CHARSET_CHINESE_TRADITIONAL = 'Big5',
        CHARSET_CRYLLIC             = 'KO18-R',
        CHARSET_GREEK               = 'ISO-8859-7',
        CHARSET_HEBREW              = 'ISO-8859-8-I',
        CHARSET_JAPANESE            = 'ISO-2022-JP',
        CHARSET_KOREAN              = 'EUC-KR',
        CHARSET_NORDIC              = 'ISO-8859-10',
        CHARSET_SOUTH_EUROPE        = 'ISO-8859-3',
        CHARSET_THAI                = 'TIS-620',
        CHARSET_TURKISH             = 'ISO-8859-9',
        CHARSET_UNICODE             = 'UTF-8',
        CHARSET_VIETNAMESE          = 'VISCII';

	const
        DISPOSITION_INLINE          = 'inline',
        DISPOSITION_ATTACHMENT      = 'attachment';

    const
        ENCODING_7BIT               = '7bit',
        ENCODING_8BIT               = '8bit',
        ENCODING_BINARY             = 'binary',
        ENCODING_QUOTED_PRINTABLE   = 'quoted-printable',
        ENCODING_BASE64             = 'base64',
        ENCODING_IETFTOKEN          = 'ietf-token',
        ENCODING_XTOKEN             = 'x-token';

    const
		PRIORITY_HIGHEST	        = 1,
		PRIORITY_HIGH		        = 2,
		PRIORITY_NORMAL		        = 3,
		PRIORITY_LOW		        = 4,
		PRIORITY_LOWEST		        = 5;

    const
        TYPE_APPLICATION_ENVOY                          = 'application/envoy',
        TYPE_APPLICATION_FRACTALS                       = 'application/fractals',
        TYPE_APPLICATION_FUTURESPLASH                   = 'application/futuresplash',
        TYPE_APPLICATION_HTA                            = 'application/hta',
        TYPE_APPLICATION_INTERNET_PROPERTY_STREAM       = 'application/internet-property-stream',
        TYPE_APPLICATION_MAC_BINHEX40                   = 'application/mac-binhex40',
        TYPE_APPLICATION_MSWORD                         = 'application/msword',
        TYPE_APPLICATION_OCTET_STREAM                   = 'application/octet-stream',
        TYPE_APPLICATION_ODA                            = 'application/oda',
        TYPE_APPLICATION_OLESCRIPT                      = 'application/olescript',
        TYPE_APPLICATION_PDF                            = 'application/pdf',
        TYPE_APPLICATION_PICS_RULES                     = 'application/pics-rules',
        TYPE_APPLICATION_PKCS10                         = 'application/pkcs10',
        TYPE_APPLICATION_PKIX_CRL                       = 'application/pkix-crl',
        TYPE_APPLICATION_POSTSCRIPT                     = 'application/postscript',
        TYPE_APPLICATION_RTF                            = 'application/rtf',
        TYPE_APPLICATION_SET_PAYMENT_INITIATION         = 'application/set-payment-initiation',
        TYPE_APPLICATION_SET_REGISTRATION_INITIATION    = 'application/set-registration-initiation',
        TYPE_APPLICATION_VND_MS_EXCEL                   = 'application/vnd.ms-excel',
        TYPE_APPLICATION_VND_MS_OUTLOOK                 = 'application/vnd.ms-outlook',
        TYPE_APPLICATION_VND_MS_PKICERTSTORE            = 'application/vnd.ms-pkicertstore',
        TYPE_APPLICATION_VND_MS_PKISECCAT               = 'application/vnd.ms-pkiseccat',
        TYPE_APPLICATION_VND_MS_PKISTL                  = 'application/vnd.ms-pkistl',
        TYPE_APPLICATION_VND_MS_POWERPOINT              = 'application/vnd.ms-powerpoint',
        TYPE_APPLICATION_VND_MS_PROJECT                 = 'application/vnd.ms-project',
        TYPE_APPLICATION_VND_MS_WORKS                   = 'application/vnd.ms-works',
        TYPE_APPLICATION_WINHLP                         = 'application/winhlp',
        TYPE_APPLICATION_X_BCPIO                        = 'application/x-bcpio',
        TYPE_APPLICATION_X_CDF                          = 'application/x-cdf',
        TYPE_APPLICATION_X_COMPRESS                     = 'application/x-compress',
        TYPE_APPLICATION_X_COMPRESSED                   = 'application/x-compressed',
        TYPE_APPLICATION_X_CPIO                         = 'application/x-cpio',
        TYPE_APPLICATION_X_CSH                          = 'application/x-csh',
        TYPE_APPLICATION_X_DIRECTOR                     = 'application/x-director',
        TYPE_APPLICATION_X_DVI                          = 'application/x-dvi',
        TYPE_APPLICATION_X_GTAR                         = 'application/x-gtar',
        TYPE_APPLICATION_X_GZIP                         = 'application/x-gzip',
        TYPE_APPLICATION_X_HDF                          = 'application/x-hdf',
        TYPE_APPLICATION_X_INTERNET_SIGNUP              = 'application/x-internet-signup',
        TYPE_APPLICATION_X_IPHONE                       = 'application/x-iphone',
        TYPE_APPLICATION_X_JAVASCRIPT                   = 'application/x-javascript',
        TYPE_APPLICATION_X_LATEX                        = 'application/x-latex',
        TYPE_APPLICATION_X_MSACCESS                     = 'application/x-msaccess',
        TYPE_APPLICATION_X_MSCARDFILE                   = 'application/x-mscardfile',
        TYPE_APPLICATION_X_MSCLIP                       = 'application/x-msclip',
        TYPE_APPLICATION_X_MSDOWNLOAD                   = 'application/x-msdownload',
        TYPE_APPLICATION_X_MSMEDIAVIEW                  = 'application/x-msmediaview',
        TYPE_APPLICATION_X_MSMETAFILE                   = 'application/x-msmetafile',
        TYPE_APPLICATION_X_MSMONEY                      = 'application/x-msmoney',
        TYPE_APPLICATION_X_MSPUBLISHER                  = 'application/x-mspublisher',
        TYPE_APPLICATION_X_MSSCHEDULE                   = 'application/x-msschedule',
        TYPE_APPLICATION_X_MSTERMINAL                   = 'application/x-msterminal',
        TYPE_APPLICATION_X_MSWRITE                      = 'application/x-mswrite',
        TYPE_APPLICATION_X_NETCDF                       = 'application/x-netcdf',
        TYPE_APPLICATION_X_PERFMON                      = 'application/x-perfmon',
        TYPE_APPLICATION_X_PKCS12                       = 'application/x-pkcs12',
        TYPE_APPLICATION_X_PKCS7_CERTIFICATES           = 'application/x-pkcs7-certificates',
        TYPE_APPLICATION_X_PKCS7_CERTREQRESP            = 'application/x-pkcs7-certreqresp',
        TYPE_APPLICATION_X_PKCS7_MIME                   = 'application/x-pkcs7-mime',
        TYPE_APPLICATION_X_PKCS7_SIGNATURE              = 'application/x-pkcs7-signature',
        TYPE_APPLICATION_X_SH                           = 'application/x-sh',
        TYPE_APPLICATION_X_SHAR                         = 'application/x-shar',
        TYPE_APPLICATION_X_SHOCKWAVE_FLASH              = 'application/x-shockwave-flash',
        TYPE_APPLICATION_X_STIFFIT                      = 'application/x-stuffit',
        TYPE_APPLICATION_X_SV4CPIO                      = 'application/x-sv4cpio',
        TYPE_APPLICATION_X_SV4CRC                       = 'application/x-sv4crc',
        TYPE_APPLICATION_X_TAR                          = 'application/x-tar',
        TYPE_APPLICATION_X_TCL                          = 'application/x-tcl',
        TYPE_APPLICATION_X_TEX                          = 'application/x-tex',
        TYPE_APPLICATION_X_TEXINFO                      = 'application/x-texinfo',
        TYPE_APPLICATION_X_TROFF                        = 'application/x-troff',
        TYPE_APPLICATION_X_TROFF_MAN                    = 'application/x-troff-man',
        TYPE_APPLICATION_X_TROFF_ME                     = 'application/x-troff-me',
        TYPE_APPLICATION_X_TROFF_MS                     = 'application/x-troff-ms',
        TYPE_APPLICATION_X_USTAR                        = 'application/x-ustar',
        TYPE_APPLICATION_X_WAIS_SOURCE                  = 'application/x-wais-source',
        TYPE_APPLICATION_X_X509_CA_CERT                 = 'application/x-x509-ca-cert',
        TYPE_APPLICATION_YND_MS_PKIPKO                  = 'application/ynd.ms-pkipko',
        TYPE_APPLICATION_ZIP                            = 'application/zip',
        TYPE_AUDIO_BASIC                                = 'audio/basic',
        TYPE_AUDIO_MID                                  = 'audio/mid',
        TYPE_AUDIO_MPEG                                 = 'audio/mpeg',
        TYPE_AUDIO_X_AIFF                               = 'audio/x-aiff',
        TYPE_AUDIO_X_MPEGURL                            = 'audio/x-mpegurl',
        TYPE_AUDIO_X_PEN_REALAUDIO                      = 'audio/x-pn-realaudio',
        TYPE_AUDIO_X_WAV                                = 'audio/x-wav',
        TYPE_IMAGE_BMP                                  = 'image/bmp',
        TYPE_IMAGE_CIS_COD                              = 'image/cis-cod',
        TYPE_IMAGE_GIF                                  = 'image/gif',
        TYPE_IMAGE_IEF                                  = 'image/ief',
        TYPE_IMAGE_JPEG                                 = 'image/jpeg',
        TYPE_IMAGE_PIPEG                                = 'image/pipeg',
        TYPE_IMAGE_PNG                                  = 'image/png',
        TYPE_IMAGE_SVG_XML                              = 'image/svg+xml',
        TYPE_IMAGE_TIFF                                 = 'image/tiff',
        TYPE_IMAGE_X_CMU_RASTER                         = 'image/x-cmu-raster',
        TYPE_IMAGE_X_CMX                                = 'image/x-cmx',
        TYPE_IMAGE_X_ICON                               = 'image/x-icon',
        TYPE_IMAGE_X_PORTABLE_ANYMAP                    = 'image/x-portable-anymap',
        TYPE_IMAGE_X_PORTABLE_BITMAP                    = 'image/x-portable-bitmap',
        TYPE_IMAGE_X_PORTABLE_GRAYMAP                   = 'image/x-portable-graymap',
        TYPE_IMAGE_X_PORTABLE_PIXMAP                    = 'image/x-portable-pixmap',
        TYPE_IMAGE_X_RGB                                = 'image/x-rgb',
        TYPE_IMAGE_X_XBITMAP                            = 'image/x-xbitmap',
        TYPE_IMAGE_X_XWINDOWDUMP                        = 'image/x-xwindowdump',
        TYPE_MESSAGE_RFC822                             = 'message/rfc822',
        TYPE_TEXT_CSS                                   = 'text/css',
        TYPE_TEXT_H323                                  = 'text/h323',
        TYPE_TEXT_HTML                                  = 'text/html',
        TYPE_TEXT_IULS                                  = 'text/iuls',
        TYPE_TEXT_PLAIN                                 = 'text/plain',
        TYPE_TEXT_RICHTEXT                              = 'text/richtext',
        TYPE_TEXT_SCRIPTLET                             = 'text/scriptlet',
        TYPE_TEXT_TAB_SEPARATED_VALUES                  = 'text/tab-separated-values',
        TYPE_TEXT_WEBVIEWHTML                           = 'text/webviewhtml',
        TYPE_TEXT_X_COMPONENT                           = 'text/x-component',
        TYPE_TEXT_X_SETEXT                              = 'text/x-setext',
        TYPE_TEXT_X_VCARD                               = 'text/x-vcard',
        TYPE_VIDEO_MPEG                                 = 'video/mpeg',
        TYPE_VIDEO_QUICKTIME                            = 'video/quicktime',
        TYPE_VIDEO_X_LA_ASF                             = 'video/x-la-asf',
        TYPE_VIDEO_X_MS_ASF                             = 'video/x-ms-asf',
        TYPE_VIDEO_X_MSVIDEO                            = 'video/x-msvideo',
        TYPE_VIDEO_X_SGI_MOVIE                          = 'video/x-sgi-movie',
        TYPE_X_WORLD_X_VRML                             = 'x-world/x-vrml';

	const VERSION = '2.2.0';
    
    public static $PRIORITIES = array(
        '1 (Highest)',
        '2 (High)',
        '3 (Normal)',
        '4 (Low)',
        '5 (Lowest)'
    );

    public static $INJECTED = '/(\n+)|(\r+)|(\t+)|(%0A+)|(%0D+)|(%08+)|(%09+)/i';
}
