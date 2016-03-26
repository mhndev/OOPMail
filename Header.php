<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/26/16
 * Time: 5:45 PM
 */

namespace mhndev\OOPMail;

class Header
{
    /**
     * @var
     */
    protected $from;

    /**
     * @var
     */
    protected $replyTo;

    /**
     * @var
     */
    protected $cc;

    /**
     * @var
     */
    protected $mime;

    /**
     * @var
     */
    protected $content_type;

    /**
     * @var string
     */
    protected $headerString;


    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * @param mixed $replyTo
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $cc
     * @return $this
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param mixed $mime
     * @return $this
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param mixed $content_type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->content_type = $content_type;

        return $this;
    }


    /**
     * Header constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        if(!empty($data)){
            foreach ($data as $k => $v){
                $this->{$k} = $v;
            }
        }
    }

    /**
     * @return string
     */
    public function fromComponents()
    {
        if($this->headerString)
            return $this->headerString;

        if(!empty($this->from))
            $this->headerString .= 'From: ' . $this->from . "\r\n";

        if(!empty($this->replyTo))
            $this->headerString .= 'Reply-To: '.$this->replyTo . "\r\n";

        if(!empty($this->mime))
            $this->headerString .= 'MIME-Version: '.=$this->mime . "\r\n";

        if(!empty($this->content_type))
            $this->headerString .= 'Content-Type: ' .=$this->content_type . "\r\n";

        if(!empty($this->cc))
            $this->headerString .= 'CC: '.$this->cc . "\r\n";

    }

}
