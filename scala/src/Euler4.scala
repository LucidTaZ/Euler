object Euler4 extends App {
  val start = 100
  val end = 999

  val products: Seq[Int] = for {
    n <- start to end
    m <- n to end
  } yield {
    n * m;
  }
  val palindromes = products.filter { TaZMath.isPalindrome _ }
  val largest = palindromes.max
  Console.out.println(s"Result: $largest")
}
