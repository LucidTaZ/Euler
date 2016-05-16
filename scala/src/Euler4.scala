object Euler4 extends App {
  val start = 100
  val end = 999

  val largest = TaZMath.largestPalindromeOfTwoFactors(start, end);
  Console.out.println(s"Result: $largest")
}
