<?php namespace Menti\Flash;

class FlashNotifier
{

    /**
     * The session writer.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new flash notifier instance.
     *
     * @param SessionStore $session
     */
    function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     * @return $this
     */
    public function info($message, $title = '')
    {
        $this->message($message, $title, 'info');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string $message
     * @return $this
     */
    public function success($message, $title = '')
    {
        $this->message($message, $title, 'success');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string $message
     * @return $this
     */
    public function error($message, $title = '')
    {
        $this->message($message, $title, 'error');

        return $this;
    }

    /**
     * Flash an danger message.
     *
     * @param  string $message
     * @return $this
     */
    public function danger($message, $title = '')
    {
        $this->message($message, $title, 'danger');

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string $message
     * @return $this
     */
    public function warning($message, $title = '')
    {
        $this->message($message, $title, 'warning');

        return $this;
    }

    /**
     * Flash a general message.
     *
     * @param  string $message
     * @param  string $level
     * @return $this
     */
    private function message($message, $title, $level)
    {
        $this->session->flash('flash.type', $level);
        $this->session->flash('flash.content.title', $title);
        $this->session->flash('flash.content.message', $message);

        return $this;
    }

}
