<?php

namespace Framework\Model;

/**
 *
 */
interface SessionInterface
{
  function check($id);
  function provider($id);
}
