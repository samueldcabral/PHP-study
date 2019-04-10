<?php

class Exam
{
  // TODO
  private $weight;
  private $answer;
  private $answers;
  private $grades;

  public function __construct($answer, $weight)
  {
    $this->answer = $answer;
    $this->weight = $weight;
  }

  public function add($student, $answer)
  {
    $this->answers[$student] = $answer;
  }

  public function grade($student):float
  {
    $totalScore = 0;

    if($this->answers[$student])
    {
      foreach($this->answers[$student] as $index => $chars)
      {
        if($this->answer[$index] === $chars)
        {
          $totalScore += $this->weight[$index];
        }
      }
    }
    return $totalScore;
  }

  public function avg():float
  {
    $totalScore = 0.0;

    foreach($this->answers as $index=>$student)
    {
      $totalScore += $this->grade($index);
    }

    return $totalScore / sizeof($this->answers);
  }

  public function min($count = 1)
  {
    $minScores = [];
    $result = [];

    foreach($this->answers as $index=>$student)
    {
      $minScores[] = $this->grade($index);
    }

    sort($minScores);

    for($i = 0; $i < $count; $i++)
      {
        $result[] = $minScores[$i];
      }

    return $result;
  }

  public function max($count = 1)
  {
    $maxScores = [];
    $result = [];

    foreach($this->answers as $index=>$student)
    {
      $maxScores[] = $this->grade($index);
    }

    sort($maxScores);

    for($i = 0; $i < $count; $i++)
    {
      $result[] = $maxScores[sizeof($maxScores) - 1 - $i];
    }

    return $result;
  }

  public function lt($count = 0)
  {
    $scores = [];
    $result = [];

    foreach($this->answers as $index=>$student)
    {
      $scores[] = $this->grade($index);
    }

    sort($scores);

    for($i = 0; $i < sizeof($scores); $i++)
    {
      if($scores[$i] < $count) 
      {
        $result[] = $scores[$i];
      }
    }

    return $result;
  }

  public function gt($count = 0)
  {
    $scores = [];
    $result = [];

    foreach($this->answers as $index=>$student)
    {
      $scores[] = $this->grade($index);
    }

    sort($scores);

    for($i = 0; $i < sizeof($scores); $i++)
    {
      if($scores[$i] > $count) 
      {
        $result[] = $scores[$i];
      }
    }

    return $result;
  }
}
