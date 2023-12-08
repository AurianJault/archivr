<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @uses Timeline
 * @uses View
 */
final class TestTimeline extends TestCase
{
    /**
     * @covers Timeline::__construct
     * @covers Timeline::getName
     * @covers Timeline::__toString
     */
    public function testCanBeCreatedTimelineAndGetName(): void
    {
        $name = "testName-aianpcac";

        $timeline = new Timeline($name);

        $this->assertSame($name, $timeline->getName());

        $this->assertSame($name, $timeline->__toString());
    }

    /**
     * @covers Timeline::getViews
     * @covers Timeline::getFirstView
     * @covers Timeline::getViewByPath
     * @covers Timeline::isView
     * @covers Timeline::addView
     * @covers Timeline::removeView
     */
    public function testViewAttribute():void
    {
        $views = array();
        $views[] = new View("views.path");

        $view = new View("view.path");

        $timeline = new Timeline("test");

        $timeline->addView($views[0]);

        $this->assertSame($views[0]->getPath(), $timeline->getViews()[0]->getPath());

        $timeline->addView($view);

        $viewById = $timeline->getViewByPath($view->getPath());

        $this->assertSame($viewById->getPath(), $view->getPath());

        $this->assertTrue($timeline->isView($view));

        $timeline->removeView($view);

        $this->assertFalse($timeline->isView($view));
    }
}