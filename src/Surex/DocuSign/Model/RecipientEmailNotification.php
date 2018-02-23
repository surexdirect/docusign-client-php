<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientEmailNotification
{
    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @var string
     */
    protected $emailBody;
    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @var string
     */
    protected $emailSubject;
    /**
     * The language to be used with your custom notification email. The supported languages, with the language value shown in parenthesis, are: Arabic (ar), Bahasa Indonesia (id), Bahasa Melayu (ms) Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro),Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk), and Vietnamese (vi).
     *
     * @var string
     */
    protected $supportedLanguage;

    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @return string
     */
    public function getEmailBody(): ?string
    {
        return $this->emailBody;
    }

    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @param string $emailBody
     *
     * @return self
     */
    public function setEmailBody(?string $emailBody): self
    {
        $this->emailBody = $emailBody;

        return $this;
    }

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @return string
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(?string $emailSubject): self
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * The language to be used with your custom notification email. The supported languages, with the language value shown in parenthesis, are: Arabic (ar), Bahasa Indonesia (id), Bahasa Melayu (ms) Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro),Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk), and Vietnamese (vi).
     *
     * @return string
     */
    public function getSupportedLanguage(): ?string
    {
        return $this->supportedLanguage;
    }

    /**
     * The language to be used with your custom notification email. The supported languages, with the language value shown in parenthesis, are: Arabic (ar), Bahasa Indonesia (id), Bahasa Melayu (ms) Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro),Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk), and Vietnamese (vi).
     *
     * @param string $supportedLanguage
     *
     * @return self
     */
    public function setSupportedLanguage(?string $supportedLanguage): self
    {
        $this->supportedLanguage = $supportedLanguage;

        return $this;
    }
}
