// creating an array and passing the number, questions, options, and answers
let questions = [
    {
    numb: 1,
    question: "A relation R in a set A is called _______, if (a1, a2) ∈ R implies (a2, a1) ∈ R, for all a1, a2 ∈ A.",
    answer: "symmetric",
    options: [
      "transitive",
      "symmetric",
      "equivalence",
      "non-symmetric"
    ]
  },
    {
    numb: 2,
    question: "If the order of the matrix is m×n, then how many elements will there be in the matrix?",
    answer: " mn",
    options: [
      "mn^2",
      "2mn",
      "m^2 n^2",
      " mn"
    ]
  },
    {
    numb: 3,
    question: "Find the value of sin^−1(sin4π/3) is _______",
    answer: "π/3",
    options: [
      "π",
      "π/3",
      "π/2",
      "π/4"
    ]
  },
    {
    numb: 4,
    question: "Find derivative of tan(x+4).",
    answer: "sec2(x+4)",
    options: [
      "4xsec2(x+4)",
      "4sec2(x+4)",
      "sec^2(x+4)",
      "sec(x+4)"
    ]
  },
    {
    numb: 5,
    question: "Find dydx of 2x+3y = sinx.",
    answer: "cosx−2/3",
    options: [
      "cosx−2/3",
      "cosx+2/3",
      "sinx-2/3",
      "cosx−3/3"
    ]
  },
  // you can uncomment the below codes and make duplicate as more as you want to add question
  // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];