<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/20/15
 * Time: 12:31 PM
 */

namespace Edison\DemoBundle\Controller;

use Edison\DemoBundle\Reporting\DemoReportManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ReportController extends Controller
{
    /**
     * @Route("/demos/report/recentlyUpdated.csv")
     */
    public function updatedDemosAction()
    {
        $demoReportManager = $this->container->get('demo_report_manager');
        $content = $demoReportManager->getRecentlyUpdatedReport();

        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }
} 