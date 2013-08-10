<?php
class Plugin_haiku_errors extends Plugin {
  public $meta = array(
    'name'       => 'Haiku Errors',
    'version'    => '1.0',
    'author'     => 'Alexandru Badiu',
    'author_url' => 'http://ctrlz.ro'
  );

  /**
   * Haiku Errors from Netpositive.
   *
   */
  private $haikus = array(
    "The web site you seek\nLies beyond our perception\nBut others await.",
    "Sites you are seeking\nFrom your path they are fleeing\nTheir winter has come.",
    "A truth found, be told\nYou are far from the fold, Go\nCome back yet again.",
    "Wind catches lily\nScatt'ring petals to the wind:\nYour site is not found.",
    "These three are certain:\nDeath, taxes, and site not found.\nYou, victim of one.",
    "Ephemeral site.\nI am the Blue Screen of Death.\nNo one hears your screams.",
    "Aborted effort:\nThe site, passed this veil of tears.\nYou ask way too much.",
    "Mourning and sorrow\n404 not with us now\nLost to paradise.",
    "Not a pretty sight\nWhen the web dies screaming loud\nThe site is not found.",
    "Site slips through fingers\nPulse pounding hard and frantic\nVanishing like mist.",
    "The dream is shattered\nThe web site cannot be found\nInside the spring rain.",
    "Bartender yells loud\nYour site cannot be found, boy\nBuy another drink.",
    "Chrome megaphone barks\nIt's not possible to talk\nNot yet anyway.",
    "Emptyness of soul\nForever aching blackness:\n'Blah.com not found.'",
    "Click exciting link\nGossamer threads hold you back\n404 not found.",
    "With searching comes loss\nAnd the presence of absence:\nThe site is not found.",
    "You step in the stream,\nBut the water has moved on\nThe site is not here.",
    "Rather than a beep\nOr a rude error message,\nThese words: 'Site not found.'",
    "Something you entered\nTranscended parameters.\nThe site is unknown.",
    "Stay the patient course\nOf little worth is your ire\nThe server is down",
    "There is a chasm\nOf carbon and silicon\nThe server can't bridge.",
    "Chaos reigns within.\nReflect, repent, and retry.\nServer shall return.",
    "Won't you please observe\nA brief moment of silence\nFor the dead server?",
    "First snow, then silence.\nThis expensive server dies\nSo beautifully.",
    "Seeing my great fault\nThrough darkening dead servers\nI begin again.",
    "Visit the home page\nIt can't be done easily\nWhen the site is down.",
    "Cables have been cut\nSouthwest of Northeast somewhere\nWe are not amused.",
    "Site is silent, yes\nNo voices can be heard now\nThe cows roll their eyes.",
    "Silicon shudders\nThe site is down for the count\nOne big knockout punch.",
    "Yesterday it worked\nToday it is not working\nThe web is like that.",
    "The ten thousand things\nHow long do any persist?\nThe file, not there.",
    "A file that big?\nIt might be very useful\nBut now it is gone.",
    "To have no errors\nWould be life without meaning\nNo struggle, no joy",
    "Errors have occurred.\nWe won't tell you where or why.\nLazy programmers.",
    "The code was willing\nIt considered your request,\nBut the chips were weak.",
    "Error reduces\nYour expensive computer\nTo a simple stone.",
    "Server's poor response\nNot quick enough for browser.\nTimed out, plum blossom.",
    "Login incorrect.\nOnly perfect spellers may\nEnter this system.",
  );

  /**
   * Haiku Errors
   *
   * Returns a random haiku.
   */
  public function index() {
    $message = $this->haikus[rand(0, sizeof($this->haikus))];
    $lines = explode("\n", $message);

    foreach ($lines as $i => $line) {
      $lines[$i] = "> " . $line;
    }

    return Markdown(implode("\n\n", $lines));
  }
}
