<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductRepository;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('product/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
        ]);
    }

    /**
     * @Route("/create", name="create product")
     */
    public function createAction()
    {
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        $data = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'category' => $product->getCategory()->getName()
        ];

        return $this->render(
            'product/create.html.twig',
            [
                'product' => $data
            ]
        );
    }

    /**
     * @Route("/show", name="show products")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()
            ->getManager();
        $repo = $em->getRepository('AppBundle:Product');


        $products = $repo
            ->findAllOrderedByName();

        if (!$products) {
            throw $this->createNotFoundException(
                'No product found'
            );
        }

        foreach ($products as $key => $product) {
            $data[$key]['id'] = $product->getId();
            $data[$key]['name'] = $product->getName();
            $data[$key]['description'] = $product->getDescription();
            $data[$key]['price'] = $product->getPrice();
            $data[$key]['category'] = $product->getCategory()->getName();
            $data[$key]['date'] = $product->getCreatedAt()->format('d-m-Y');
        }

        return $this->render(
            'product/list.html.twig',
            [
                'products' => $data
            ]
        );
    }

    /**
     * @param $categoryId
     * @return Response
     * @Route("/show/{categoryId}", name="show product by category ID")
     */
    public function showByCategoryIdAction($categoryId)
    {

//        print_r($_POST); die;

        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find($categoryId);
        $products = $category->getProducts();

        echo '<table>';
        foreach ($products as $product) {
            echo '<tr>';
            echo '<td>';
            echo $product->getId();
            echo '</td>';
            echo '<td>';
            echo $product->getName();
            echo '</td>';
            echo '<td>';
            echo $product->getDescription();
            echo '</td>';
            echo '<td>';
            echo $product->getPrice();
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        die;
//        print_r($products); die;
//        return new Response($category);

    }

    /**
     * @param $productId
     * @return Response
     * @Route("/update/{productId}", name="update product")
     */
    public function updateAction($productId)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productId
            );
        }

        $product->setName("Kolian");
        $product->setDescription("Eto Kolian. On 4etkiy patsik.");
        $product->setPrice(20.1);
        $em->flush();

        $data = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice()
        ];

        return $this->render(
            'product/create.html.twig',
            [
                'product' => $data
            ]
        );
    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
